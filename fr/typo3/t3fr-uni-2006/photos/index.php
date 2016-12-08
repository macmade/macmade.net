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
							<h1>T3FRUniversity 2006 - Les photos</h1>
							<div class="clearer">
								<h2>Dimanche - 15 octobre 2006 (préparatifs)</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2006/photos/sunday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Lundi - 16 octobre 2006</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2006/photos/monday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Mardi - 17 octobre 2006</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2006/photos/tuesday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Mercredi - 18 octobre 2006</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2006/photos/wednesday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Jeudi - 19 octobre 2006</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2006/photos/thursday/'));
								?>
							</div>
							<div class="clearer">
								<h2>Vendredi - 20 octobre 2006</h2>
								<?php
									echo($mod->showFiles('uploads/images/t3fr-uni-2006/photos/friday/'));
								?>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
