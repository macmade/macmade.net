<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Form class
	require_once(PATH_mod . 'news/class.news_rss.php');
	
	// Locale
	setlocale(LC_ALL,'en_US');
	
	// New RSS object
	$rss = new news_rss();
	
	// Set RSS fields
	$rss->title = 'macmade.net: RSS feed';
	$rss->link = 'http://www.macmade.net/';
	$rss->language = 'fr';
	$rss->description = 'Les dernières news de macmade.net';
	
	// Set display page
	$rss->displayPage = 'http://www.macmade.net/fr/divers/news/index.php';
	
	// XML content type
	header('Content-Type: text/xml; charset="' . $rss->charset . '"');
	
	// Write feed
	echo($rss->createFeed());
?>
