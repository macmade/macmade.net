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
	$player->movie = '/uploads/movies/t3fruni2006/t3fruni2006-interview.flv';
?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" />
							</div>
							<h1>T3FRUniversity 2006 - Interview</h1>
							<h2>Une université pour Typo3</h2>
							<div class="box">
								Interview réalisé par Thierry Weber</a> (<a href="http://www.idprod.ch/~james/" title="Culture Pod">Culture Pod</a> - <a href="http://www.idprod.ch/" title="IDProd">IDProd</a>), le 7 octobre 2006<br />
								<a href="http://www.idprod.ch/~james/?p=86" title="Article original">Article original</a>
							</div>
							<div>
								<?php
									echo($player->createPlayer());
								?>
							</div>
							<div>
								Culture Pod s’est retrouvée à faire la connaissance de Jean-David Gadina et de Luigi Iannitelli, tous deux créateurs de macmade.net et de kryzalid, deux structures de créations web. Ils sont également à l’origine de T3FRUniversity 2006, une université ouverte et dédiée au monde de l’open source et surtout à Typo 3, ce CMS puissant et très répandu sur le web. C’est toute une semaine de conférence et de cours qu’il proposent en collaboration avec l’eracom, l’École Romande d’Arts et de Communication.
							</div>
							<div>
								Trop tôt le matin ou alors intimidés, Jean-David et Luigi nous parlent (tout doucement!) de leur école qui ouvre très bientôt ses portes. Toutes les infos ici pour le programme des cours et pour les inscriptions.
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
