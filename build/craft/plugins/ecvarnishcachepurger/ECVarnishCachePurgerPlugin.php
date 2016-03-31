<?php
namespace Craft;

class ECVarnishCachePurgerPlugin extends BasePlugin
{
    private $_ignoreCookieName = 'CraftVarnishBypassCache';

    function getName()
    {
         return Craft::t('Extreme Creations Varnish Cache Purger');
    }

    function getVersion()
    {
        return '1.3';
    }

    function getDeveloper()
    {
        return 'Extreme Creations Ltd.';
    }

    function getDeveloperUrl()
    {
        return 'http://extreme-creations.co.uk';
    }

	function registerSiteRoutes() {
		return array(
			'crontabs/varnish-purge-sections-containing-newly-published-or-expired-entries' => array('action' => 'eCVarnishCachePurger/purge/purgeSectionUrlsForRecentlyPublishedOrExpiredEntries')
		);
	}

	protected function defineSettings() {
		return array(
			'lastrun_timestamp_cache_key' => array(AttributeType::String, 'default' => 'uk.co.nisalocally.purgeSectionUrlsForRecentlyPublishedOrExpiredEntries-lastrun-timestamp')
		);
	}

    function init()
    {
        craft()->on('entries.saveEntry', function(Event $event) {
            $this->purgeCache($event);
        });

        craft()->on('userSession.onLogin', function(Event $event) {
            $this->setCacheIgnoreCookie($event);
        });

        craft()->on('userSession.onLogout', function(Event $event) {
            $this->unsetCacheIgnoreCookie($event);
        });
    }

    function purgeCache(Event $event)
    {
        $urlsToPurge = array();

        // Site URL config param
        $siteUrl = craft()->config->get('siteUrl');
        if (empty($siteUrl)) {
            return FALSE;
        }
        $siteUrl = preg_replace('/https?:\/\//', '', $siteUrl);

        /*
         * Get URLs to purge
         */

        // If entry has been saved
        if ( ! empty($event->params['entry'])) {
            $entry = $event->params['entry'];
            $entryUri = $entry->uri;

            if ($entryUri[0] != '/') {
                $entryUri = '/' . $entryUri;
            }

            $urlsToPurge[] = array(
                'url'   => $siteUrl . $entryUri,
                'match' => 'pattern'
            );

            switch ($entry->sectionId) {

      				//home page
      				case 1:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/',
      						'match' => 'exact'
      					);

      				break;

              //aboutStructure
      				case 13:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/about',
      						'match' => 'pattern'
      					);

      				break;

              //blogChannel
      				case 16:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/blog',
      						'match' => 'pattern'
      					);

      				break;

              //caseStudiesStructure
      				case 8:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/case-studies',
      						'match' => 'pattern'
      					);

      				break;

              //industryStructure
      				case 6:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/industry',
      						'match' => 'pattern'
      					);

      				break;

              //languageLandingPagesStructure - do entire site because the GLOBAL language dropdown might change (which is on every page)
              case 26:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/',
      						'match' => 'pattern'
      					);

      				break;

              //servicesStructure
              case 4:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/services',
      						'match' => 'pattern'
      					);

      				break;

              //staffChannel
              case 14:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/about/management-team',
      						'match' => 'exact'
      					);

      				break;

              //testimonialsChannel - who knows where a testimonial will be... purge entire domain
              case 21:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/',
      						'match' => 'pattern'
      					);

      				break;

              //trainingStructure
              case 10:

      					$urlsToPurge[] = array(
      						'url'   => $siteUrl . '/training',
      						'match' => 'pattern'
      					);

      				break;

            }
        }

        /*
         * Purge URLs
         */

        if (empty($urlsToPurge)) {
            return FALSE;
        }

        $purgerService = new ECVarnishCachePurgerService();

        return $purgerService->purgeUrls($urlsToPurge);
    }

    function setCacheIgnoreCookie(Event $event)
    {
        $cookieName = $this->_ignoreCookieName;
        $cookieValue = '1';
        $cookieExpire = 0; // expire at the end of the session (when the browser closes)
        $cookiePath = '/'; // entire domain
        setcookie($cookieName, $cookieValue, $cookieExpire, $cookiePath);
    }

    function unsetCacheIgnoreCookie(Event $event)
    {
        $cookiePath = '/';
        setcookie($this->_ignoreCookieName, '', time() - 3600, $cookiePath);
    }
}
