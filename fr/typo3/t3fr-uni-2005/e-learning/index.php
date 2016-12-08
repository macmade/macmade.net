<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
	
	// Player class
	require_once(PATH_mod . 'mp3player/class.mp3player.php');
	
	// New player object
	$player = new mp3player();
	
	// Set playlist
	$player->playlist = '/uploads/playlists/t3fruni2005-elearning.xml';
?>
							<h1>T3FRUniversity 2005 - E-Learning</h1>
							<h2>Mardi 13 juillet 2005</h2>
							<?php
								echo($player->createPlayer());
							?>
							<h3 class="border">Télécharger les présentations</h3>
							<div class="left">
								<div class="space-right">
									<div>
										<a href="/uploads/pdf/t3fruni2005-elearning-1.pdf" title="TYPO3 et le ELearning"><img src="/uploads/images/t3fr-uni-2005/t3fruni2005-elearning-1.jpg" alt="" width="300" height="225" /></a>
									</div>
									<div>
										Julien Fürrer (UNIL)
									</div>
								</div>
							</div>
							<div class="left">
								<div class="space-right">
									<div>
										<a href="/uploads/pdf/t3fruni2005-elearning-2.pdf" title="Histoire de la vie"><img src="/uploads/images/t3fr-uni-2005/t3fruni2005-elearning-2.jpg" alt="" width="300" height="225" /></a>
									</div>
									<div>
										Yann Ringgenberg (UNIL)
									</div>
								</div>
							</div>
							<div class="left">
								<div class="space-right">
									<div>
										<a href="/uploads/pdf/t3fruni2005-elearning-3.pdf" title="Particularités des sites de e-learning"><img src="/uploads/images/t3fr-uni-2005/t3fruni2005-elearning-3.jpg" alt="" width="300" height="225" /></a>
									</div>
									<div>
										Romain Voisard (UNIL)
									</div>
								</div>
							</div>
							<div class="left">
								<div class="space-right">
									<div>
										<a href="/uploads/pdf/t3fruni2005-elearning-4.pdf" title="Indexation et réutilisation de contenu"><img src="/uploads/images/t3fr-uni-2005/t3fruni2005-elearning-4.jpg" alt="" width="300" height="225" /></a>
									</div>
									<div>
										Nicolas Dunand (UNIL)
									</div>
								</div>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
