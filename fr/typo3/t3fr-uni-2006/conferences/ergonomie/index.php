exc<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" /><br />
							</div>
							<h1>T3FRUni2006 - Conférences</h1>
							<h2>Ergonomie - Lundi 17.10.2006</h2>
							<div>
								<span class="strong">Intervenant:</span> Pascal Wicht (<a href="http://www.dataglove.ch/" title="DataGlove">dataglove</a>)
							</div>
							<div>
								<a href="/uploads/pdf/t3fruni2006/conf-ergonomie.pdf" title="Télécharger le PDF"><img src="/uploads/images/t3fr-uni-2006/conf-ergonomie.jpg" alt="Conférence accessibilité" width="400" height="300" /></a><br />
								<a href="/uploads/pdf/t3fruni2006/conf-ergonomie.pdf" title="Télécharger le PDF">Télécharger le PDF de la présentation</a>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
