<?php
namespace Craft;

class ECVarnishCachePurger_PurgeController extends BaseController {
	
	protected $allowAnonymous = array('actionPurgeSectionUrlsForRecentlyPublishedOrExpiredEntries');
	
    public function actionPurgeUrl() {
    	$purgeUrl = $_GET['url'];
    	$match = $_GET['match'];
    	$result = 'error';

    	$siteUrl = craft()->config->get('siteUrl');
        if ('/' != substr($siteUrl, strlen($siteUrl)-1, strlen($siteUrl))) {
            $siteUrl = $siteUrl . '/';
        }

    	/*if ( ! preg_match("/" . preg_quote($purgeUrl) . "/i", $siteUrl)) {
    		throw new Exception('The requested URL does not match the siteUrl');
    	}*/

    	// Send PURGE request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $purgeUrl);

        if ('exact' == $match) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'EC_PURGE_EXACT');
        } elseif ('pattern' == $match) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'EC_PURGE_PATTERN');
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (preg_match('/200 Purged/', $response)) {
        	$result = 'OK';
        }

        die($result);
    }
    
	public function actionPurgeSectionUrlsForRecentlyPublishedOrExpiredEntries() {
		if (craft()->config->get('devMode')) {
			craft()->config->set('devMode', false); // stops JavaScript console.log entries being sent to the command line
		}
		
		$current_timestamp = time();
		
		$lastrun_timestamp_cache_key = craft()->plugins->getPlugin('eCVarnishCachePurger')->getSettings()->getAttribute('lastrun_timestamp_cache_key');
		$last_run_timestamp = craft()->cache->get($lastrun_timestamp_cache_key);
		if (!$last_run_timestamp || !is_numeric($last_run_timestamp)) {
			$last_run_timestamp = $current_timestamp;
		}
		
		$last_run_datetime = new DateTime();
		$last_run_datetime->setTimezone(new \DateTimeZone('Europe/London'));
		$last_run_datetime->setTimestamp(intval($last_run_timestamp));
		
		// find live entries with a post date after the last execution (because they're live [now], they must have a postDate between the last execution and the current time)
		$criteria = craft()->elements->getCriteria(ElementType::Entry);
		$criteria->postDate = '> '.$last_run_datetime->mySqlDateTime();
		$criteria->limit = null;
		$entry_ids = $criteria->ids();
		unset($criteria); // clear memory
		
		if (floatval(craft()->version) >= 2.3 && intval(craft()->build) >= 2615) { // expiryDate was not added as an entry param until Craft 2.3.2615: http://buildwithcraft.com/updates#build2615 ("Entries" sub-section)
			// find expired entries with an expiry date after the last execution (because they're expired [now], they must have an expiryDate between the last execution and the current time)
			$criteria = craft()->elements->getCriteria(ElementType::Entry);
			$criteria->status = array(EntryModel::EXPIRED);
			$criteria->expiryDate = '> '.$last_run_datetime->mySqlDateTime();
			$criteria->limit = null;
			$entry_ids = array_merge($entry_ids, $criteria->ids());
			unset($criteria); // clear memory
		}
		
		$unique_section_uris = array();
		foreach ($entry_ids as $entry_id) {
			$entry = craft()->entries->getEntryById($entry_id);
			$section_uri = null;
			if ($entry->section->handle === 'offersDatabase') {
				$section_uri = '/offers';
			} else if (mb_strlen($entry->uri)) {
				$section_uri = $entry->uri;
				if (mb_substr($section_uri, 0, 1) !== '/') {
					$section_uri = '/'.$section_uri;
				}
				$section_uri = mb_substr($section_uri, 0, mb_strrpos($section_uri, '/'));
				if (!mb_strlen($section_uri)) {
					$section_uri = null;
				}
			}
			if (!is_null($section_uri) && !in_array($section_uri, $unique_section_uris)) {
				$unique_section_uris[] = $section_uri;
			}
			unset($entry); // clear memory
		}
		
		$siteUrl = craft()->config->get('siteUrl');
		$urlsToPurge = array();
		foreach ($unique_section_uris as $unique_section_uri) {
			$urlsToPurge[] = array(
				'url' => $siteUrl.$unique_section_uri,
				'match' => 'pattern'
			);
		}
		$purgerService = new ECVarnishCachePurgerService();
		try {
			$purgerService->purgeUrls($urlsToPurge);
			if (craft()->cache->get($lastrun_timestamp_cache_key) === false) {
				craft()->cache->add($lastrun_timestamp_cache_key, $current_timestamp, 0);
			} else {
				craft()->cache->set($lastrun_timestamp_cache_key, $current_timestamp, 0);
			}
		} catch (Exception $e) { }
	}
}