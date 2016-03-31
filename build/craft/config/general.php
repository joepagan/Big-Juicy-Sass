<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    '*' => array(
		'cpTrigger' => 'admin135',
		'userSessionDuration' => false,
		'addTrailingSlashesToUrls' => false,
		'omitScriptNameInUrls' => true,
		'generateTransformsBeforePageLoad' => true,
        'sendPoweredByHeader' => false,
        'allowedFileExtensions' => 'aiff, asf, avi, csv, doc, docx, gif, htm, html, jpeg, jpg, mov, mp3, mp4, m4a, mpeg, mpg, ods, odt, ogg, ogv, pdf, png, ppt, pptx, qt, rtf, svg, txt, vob, wav, webm, wma, wmv, xls, xlsx',
        'name'=>'Website',
        'defaultCpLanguage' => 'en_gb',
        'phpSessionName' => 'CmsSessionId',
		'environmentVariables' => array(
			'fileSystemPath' => '../../public'
		),
        'varnishHosts' => array(
            'http://www.website.co.uk:8080'
        ),
        'sproutForms' => array(
            'enableFileAttachments' => true
        ),
        'environment' => 'live'
	),

	// Live - uncomment pre live (this messes with the production environment)
	'website.com' => array(
		'siteUrl' => '//www.website.com',
		'devMode' => false,
        'environment' => 'live'
	),

	// Production
	'production.website.co.uk' => array(
		'siteUrl' => '//production.website.co.uk',
		'devMode' => false,
        'environment' => 'production'
	),

	// // Staging
	'staging.website.co.uk' => array(
		'devMode' => true,
		'siteUrl' => 'http://staging.website.co.uk',
        'environment' => 'staging'
	),

	'.dev' => array(
		'siteUrl' => 'http://'.$_SERVER['HTTP_HOST'].'.dev',
		'devMode' => true,
		'cacheMethod' => 'file',
        'environment' => 'local'
	)

);
