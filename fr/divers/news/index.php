<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Add lightbox to page
	$PAGE->addJS('lightbox/prototype.js');
	$PAGE->addJS('lightbox/scriptaculous.js');
	$PAGE->addJS('lightbox/lightbox.js');
	$PAGE->addCSS('lightbox.css');
	
	// News class
	require_once(PATH_mod . 'news/class.news_display.php');
	
	// New news object
	$news = new news_display();
	
	// Start page
	$PAGE->start();
?>
							<?php
								
								// Show news
								echo($news->showNews());
								
							?>
<?php
	
	// End page
	$PAGE->end();
?>
