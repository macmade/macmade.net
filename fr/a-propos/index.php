<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<div>
								<img src="/css/interface/banner-eos.gif" alt="eosgarden" width="720" height="150" />
							</div>
							<h1>eosgarden</h1>
							<h4>Jean-David Gadina - Luigi Iannitelli</h4>
							<div>
								boulevard de grancy 19<br />
								1006 lausanne<br />
								switzerland
							</div>

							<div>
								+41 (21) 601-9030<br />
								<?php echo( $GLOBALS['DIV']->linkEmail( 'info@eosgarden.com' ) ); ?><br />
								<a href="http://www.macmade.net/" title="eosgarden.com">www.eosgarden.com</a><br />
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
