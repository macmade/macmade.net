<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
	
	// Player class
	require_once(PATH_mod . 'flvplayer/class.flvplayer.php');
	
	// New player object
	$player = new flvplayer();
	
	// Set playlist
	$player->movie = '/uploads/movies/podcast-t3board07.flv';
?>
							<h1>TYPO3 Snowboard tour vol. VI</h1>
							<h2>Podcast</h2>
							<div class="box">
								L'introduction du podcast officiel du T3Board07.<br />
								<a href="http://castor.t3o.punkt.de/files/podkast_t3board07.m4v" title="Le podcast complet">Voir le podcast complet</a><br />
								<a href="http://typo3.org/podcast/" title="Tous les podcasts TYPO3">Tous les podcast TYPO3</a>
							</div>
							<div>
								<?php
									echo($player->createPlayer());
								?>
							</div>
							<h3>Crédits</h3>
							<div class="box">
								Ski: Kasper Skårhøj<br />
								Board: Jean-David «Macmade» Gadina<br />
								Camera: Joel Gerhold<br />
								Runner: Martin Mai<br />
								Post and editing: Kasper Skårhøj<br />
								Soundtrack engineering: Kristian Skårhøj<br />
								Script: Kasper Skårhøj
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
