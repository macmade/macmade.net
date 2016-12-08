<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Apprentissage par la vidéo</h1>
							<div>
								Il exsite un nombre impressionnant de vidéos, sous forme de capture-écran, qui expliquent les concepts variés de Typo3! Le site officiel propose la vidéothèque complète en deux formats. Les bandes audio sont principalement en anglais, traduites en allemand et danois, pour la plupart. Certaines sont traduites en français:
							</div>
							<ul>
								<li>
									<span class="strong"><a href="http://typo3.org/documentation/videos/wmv-format/" title="Windows Media Screen">Windows Media Screen (.wmv)</a></span><br />
									Choissisez ce format, si vous utilisez MS Windows. Meilleure compression disponible. Streaming sans perte de données, à très bas débit, même en utilisant un modem 56K. Ne fonctionne que sous Windows.
								</li>
								<li>
									<span class="strong"><a href="http://typo3.org/documentation/videos/xvid-format/" title="XVID/MP3">XVID/MP3 (.avi/.ogm)</a></span><br />
									Ces fichiers sont beaucoup plus volumineux et non sans perte, mais sont compatibles avec tous les systèmes. Pour les visualiser, utilisez votre logiciel Open Source favori (VLC ou MPlayer) pour Mac OSX, Linux, BSD, BeOS, etc.
								</li>
							</ul>
							<h2>Les 'vidéastes' Typo3</h2>
							<div>
								L'équipe de production a besoin de votre renfort - Ils recherchent des contributeurs pouvant alimenter le site de typo3.org avec leurs propres vidéos et des volontaires pour doubler les banded-audio dans leur langue. Quiconque intéressé par la vidéo-capture est bienvenu pour donner l'inspiration à l'équipe de production et proposer des trucs-et-astuces. N'hésitez pas à rejoindre le team si vous en avez les compétences!
							</div>
							<div>
								La production et la coordination est assurée par Michael Perkhofer. L'équipe actuelle est composée de:
							</div>
							<ul>
								<li>
									Kasper (99% des vidéos disponibles)
								</li>
								<li>
									Michael (postprocessing)
								</li>
								<li>
									Robert (German dubbing)
								</li>
								<li>
									Jan-Hendrik (hosting)
								</li>
							</ul>
<?php
	
	// End page
	$PAGE->end();
?>
