<?php

namespace Craft;

/**
 * EC Varnish Cache Purger Service
 *
 * Methods for clearing Varnish cache
 */
class ECVarnishCachePurgerService extends BaseApplicationComponent {
	private $_purgeCurl;
	private $_varnishHosts;

	public function __construct() {
        // Varnish Hosts config param
        $varnishHosts = craft()->config->get('varnishHosts');
        if (empty($varnishHosts)) {
        	throw new Exception('varnishHosts have not been set in the Craft config');
        }
        $this->_varnishHosts = $varnishHosts;

        // Setup cURL
		$this->_purgeCurl = curl_init();
        curl_setopt_array($this->_purgeCurl, array(
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HEADER         => FALSE,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_USERAGENT      => 'Extreme Creations Varnish Cache Purger',
            CURLOPT_USERPWD        => 'extreme:extreme',
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT        => 5,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => FALSE
        ));
	}

	/**
	 * Purge URLs
	 *
	 * @param  array $urls each URL is represented by an array containing "url" (e.g. /subdir/page) and "match" (e.g. exact or pattern)
	 * @return bool whether the urls were purged or not
	 */
	public function purgeUrls($urls = array()) {

		// Check parameters
		$urls = (array) $urls;
		if (empty($urls)) {
			throw new Exception('No URLs were provided to purge');
		}

		foreach ($urls as $url) {
			if ( ! is_array($url)) {
				$url = array(
					'url'	=> $url,
					'match'	=> 'exact'
				);
			}

			if ( preg_match('/^\/\//', $url['url'])) {
				$url['url'] = preg_replace("/^\/\//", (( ! empty($_SERVER['HTTPS'])) ? 'https://' : 'http://'), $url['url']);
			}

			// Add http:// to URL if not present (we don't actually use this, urls are purged regardless of protocol, its just to satisfy parse_url)
			if ( ! preg_match('/https?:\/\//', $url['url'])) {
				$url['url'] = 'http://' . $url['url'];
			}

			// Parse URL
			$urlParsed = parse_url($url['url']);

			// If URL not valid
			if (empty($urlParsed) || empty($urlParsed['host'])) {
				// Skip this URL
				continue;
			}

			if (empty($urlParsed['path'])) {
				$urlParsed['path'] = '/';
			}



			// Purge each URL on each varnish server
			foreach ($this->_varnishHosts as $varnishHost) {

				curl_setopt($this->_purgeCurl, CURLOPT_URL, $varnishHost);

				// Let varnish know whether to match the URL exactly or as a pattern
				if ('exact' == $url['match']) {
                    curl_setopt($this->_purgeCurl, CURLOPT_CUSTOMREQUEST, 'EC_PURGE_EXACT');
                } elseif ('pattern' == $url['match']) {
                    curl_setopt($this->_purgeCurl, CURLOPT_CUSTOMREQUEST, 'EC_PURGE_PATTERN');
                }

                // Let varnish know what host and URL we're purging
                curl_setopt($this->_purgeCurl, CURLOPT_HTTPHEADER, array(
                    'Ec-Varnish-Purge-Host: ' . $urlParsed['host'],
                    'Ec-Varnish-Purge-Url: ' . $urlParsed['path'] . (( ! empty($urlParsed['query'])) ? '?' . $urlParsed['query'] : '')
                ));

                // Send the PURGE request to Varnish
                $response = curl_exec($this->_purgeCurl);

			}

		}

		return TRUE;
	}

}
