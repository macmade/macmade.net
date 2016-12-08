<?php
	
	// Path to the directory
	require_once($_SERVER['DOCUMENT_ROOT'] . '/init.php');
	
	// Form class
	require_once(PATH_mod . 'sitemap/class.sitemap.php');
	
	// Locale
	setlocale(LC_ALL,'en_US');
	
	// New RSS object
	$sitemap = new sitemap();
	
	// XML content type
	header('Content-Type: text/xml; charset="utf-8"');
	
	// Write feed
	echo($sitemap->createSiteMap());
?>
