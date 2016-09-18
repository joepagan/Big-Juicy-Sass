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
		'addTrailingSlashesToUrls' => false,
		'omitScriptNameInUrls' => true,
		'generateTransformsBeforePageLoad' => true,
        'sendPoweredByHeader' => false,
        'allowedFileExtensions' => 'aiff, asf, avi, csv, doc, docx, gif, htm, html, jpeg, jpg, mov, mp3, mp4, m4a, mpeg, mpg, ods, odt, ogg, ogv, pdf, png, ppt, pptx, qt, rtf, svg, txt, vob, wav, webm, wma, wmv, xls, xlsx',
        'maxUploadFileSize' => '10485760', // 10mb
        //'name'=>'',
        'defaultCpLanguage' => 'en_gb',
        'phpSessionName' => 'sessionId',
        'timezone' => 'Europe/London',
		'environmentVariables' => array(
			'fileSystemPath' => '../../public'
		)
	),

	// Live - uncomment pre live (this messes with the production environment)
	// '' => array(
	// 	'siteUrl' => '',
	// 	'devMode' => false,
	// ),

	// Production
	// '' => array(
	// 	'siteUrl' => '',
	// 	'devMode' => false,
	// ),

	// // Staging
	// '' => array(
	// 	'devMode' => true,
	// 	'siteUrl' => ''
	// ),

    '.dev' => array(
		'siteUrl' => 'http://'.$_SERVER['HTTP_HOST'],
		'devMode' => true,
		'cacheMethod' => 'file'
	)

);
