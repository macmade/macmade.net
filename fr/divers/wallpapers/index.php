<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Add lightbox to page
	$PAGE->addJS('lightbox/prototype.js');
	$PAGE->addJS('lightbox/scriptaculous.js');
	$PAGE->addJS('lightbox/lightbox.js');
	$PAGE->addCSS('lightbox.css');
	
	// Start page
	$PAGE->start();
	
	// Form class
	require_once(PATH_mod . 'gallery/class.gallery.php');
	
	// New gallery object
	$mod = new gallery();
?>
							<h1>Wallpapers</h1>
							<div class="clearer">
								<?php
									echo($mod->showFiles('uploads/images/wallpapers/'));
								?>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
