<?php
	
	// Error reporting
	error_reporting(E_ALL&~E_DEPRECATED);
	
	// Timezone
	date_default_timezone_set('Europe/Zurich');
	
	// Path to the directory
	define('PATH_site',dirname(__FILE__) . '/');
	
	// Path to the libraries
	define('PATH_lib',PATH_site . 'lib/');
	
	// Path to the include files
	define('PATH_inc',PATH_site . 'inc/');
	
	// Path to the include files
	define('PATH_mod',PATH_site . 'mod/');
	
	// Path to the temporary directory
	define('PATH_tmp',PATH_site . 'tmp/');
	
	// Define language
	define('SYS_lang','fr');
	
	// Config file
	require_once(PATH_site . 'config/config.inc.php');
	
	// Language config file
	require_once(PATH_site . 'config/config.' . SYS_lang . '.inc.php');
	
	// Set locale
	setlocale(LC_ALL,$conf['locale']);
	
	// Start session
	session_name($conf['session']);
	session_start();
	
	// Utilities
	require_once(PATH_lib . 'class.utils.php');
	
	// New utilities object
	$DIV = new utils;
	
	// Lang
	require_once(PATH_lib . 'class.lang.php');
	
	// Module base
	require_once(PATH_lib . 'class.modbase.php');
	
	// Mailer
	require_once(PATH_lib . 'class.mailer.php');
	
	// DBAL
	require_once(PATH_lib . 'class.dbal.php');
	
	// New DBAL object
	$DB = new dbal;
	
	// DB connect
	$DB->db_connect();
	
	// MENU
	require_once(PATH_lib . 'class.menu.php');
	
	// New MENU object
	$MENU = new menu;
	
	// PAGE
	require_once(PATH_lib . 'class.page.php');
	
	// New PAGE object
	$PAGE = new page;
	
	// Add RSS
	$PAGE->addLink('macmade.net: RSS feed','/' . SYS_lang . '/rss.php','application/rss+xml','alternate','alternate');
?>
