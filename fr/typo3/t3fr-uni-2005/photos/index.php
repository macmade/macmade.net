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
							<h1>T3FRUniversity 2005 - Les photos</h1>
							<div class="clearer">
								<h2>Lundi - 11 juillet 2005</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2005/photos/monday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Mardi - 12 juillet 2005</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2005/photos/tuesday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Mercredi - 13 juillet 2005</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2005/photos/wednesday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Jeudi - 14 juillet 2005</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2005/photos/thursday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Vendredi - 15 juillet 2005</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2005/photos/friday/'));
								?>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
