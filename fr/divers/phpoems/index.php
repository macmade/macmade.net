<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>PHPoems</h1>
							<h2>girlfriend.class.php</h2>
							<div class="code">
								<?php
									
									// Higlight source file
									highlight_file(PATH_site . 'uploads/php/girlfriend.class.php');
								?>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
