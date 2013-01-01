<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fluidpages".
 *
 * Auto generated 31-12-2012 01:23
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Fluid Pages Engine',
	'description' => 'Fluid Page Template engine - integrates compact and highly dynamic page templates with all the benefits of Fluid.',
	'category' => 'misc',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'shy' => '',
	'dependencies' => 'cms,flux',
	'conflicts' => 'templavoila',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'version' => '1.1.0',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5-0.0.0',
			'cms' => '',
			'flux' => '5.0.0',
		),
		'conflicts' => array(
			'templavoila' => '',
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:16:{s:12:"ext_icon.gif";s:4:"68b4";s:17:"ext_localconf.php";s:4:"7c93";s:14:"ext_tables.php";s:4:"ca80";s:14:"ext_tables.sql";s:4:"f145";s:9:"README.md";s:4:"5c8b";s:33:"Classes/Backend/BackendLayout.php";s:4:"6458";s:38:"Classes/Backend/PageLayoutSelector.php";s:4:"9ac7";s:37:"Classes/Controller/PageController.php";s:4:"70be";s:51:"Classes/Override/Backend/View/BackendLayoutView.php";s:4:"a702";s:48:"Classes/Override/Backend/View/PageLayoutView.php";s:4:"ff40";s:46:"Classes/Provider/PageConfigurationProvider.php";s:4:"c1e5";s:40:"Classes/Service/ConfigurationService.php";s:4:"2a41";s:31:"Classes/Service/PageService.php";s:4:"2fa5";s:34:"Configuration/TypoScript/setup.txt";s:4:"e37a";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"1cd3";s:44:"Resources/Private/Templates/Page/Render.html";s:4:"d41d";}',
);

?>