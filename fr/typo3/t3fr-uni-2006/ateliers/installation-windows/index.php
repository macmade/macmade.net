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
?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" /><br />
							</div>
							<h1>T3FRUniversity 2006 - Atelier installation</h1>
							<h2>Windows</h2>
							<h3>Aide-mémoire pour installation d'un environnement de développement pour TYPO3 sous windows</h3>
							<div>
								Basé sur l'installeur Typo3Winstaller d' Andreas Eberhard:<br />
								<a href="http://typo3winstaller.sourceforge.net/" title="TYPO3 Winstaller">typo3winstaller.sourceforge.net</a>
							</div>
							<div>
								Par <a href="http://www.exonik.ch/" title="exonik.ch">exonik.ch</a>, Barrilliet Hervé<br />
								<?php echo($GLOBALS['DIV']->linkEmail('herve@exonik.ch')); ?>
							</div>
							<div>
								L'installeur d'Andreas Eberhard et un ensemble d'outils vous permettant d'installer typo3 sous Windows de manière automatique est assez simple.<br />
								Il peut parfois y avoir quelques problèmes en fonction de la configuration de votre poste Windows et des logiciels installés.
							</div>
							<div>
								Cet aide-mémoire a pour but de passer en revue l'installation de ce package est de mettre l'accent sur certains points délicats.<br />
								Lors de l'installation les éléments suivants seront installés:
							</div>
							<ul class="border">
								<li>
									Apache 2.0.58
								</li>
								<li>
									PHP 5.1.6
								</li>
								<li>
									MySQL 4.1.15
								</li>
								<li>
									GraphicsMagick 1.1.7
								</li>
								<li>
									AFPL Ghostscript 8.53
								</li>
								<li>
									phpMyAdmin 2.8.2
								</li>
								<li>
									Typo3 4.0.2
								</li>
							</ul>
							<h3 class="clearer">Procédure d'installation</h3>
							<div class="clearer">
								1. Récupérer les fichiers d'installation sur le site Internet de TYPO3 :<br />
								<a href="http://typo3.org/download/installers" title="TYPO3 installers">http://typo3.org/download/installers/</a>
							</div>
							<div class="clearer">
								2. Lancer le fichier d'installation qui se nomme : <span class="strong">Typo3Winstaller_4.0.2.exe</span>
							</div>
							<div class="clearer">
								3. L'installation commence, il faut suivre les étapes à l'écran.
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-1.jpg" title="Installation Windows - 1" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-1.jpg" alt="Installation Windows - 1" width="154" height="118" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-2.jpg" title="Installation Windows - 2" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-2.jpg" alt="Installation Windows - 2" width="154" height="118" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-3.jpg" title="Installation Windows - 3" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-3.jpg" alt="Installation Windows - 3" width="154" height="118" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-4.jpg" title="Installation Windows - 4" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-4.jpg" alt="Installation Windows - 4" width="154" height="118" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-5.jpg" title="Installation Windows - 5" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-5.jpg" alt="Installation Windows - 5" width="154" height="118" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-6.jpg" title="Installation Windows - 6" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-6.jpg" alt="Installation Windows - 6" width="154" height="118" /></a>
									</div
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-7.jpg" title="Installation Windows - 7" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-7.jpg" alt="Installation Windows - 7" width="154" height="118" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								4. Une fois l'installation terminée, le panneau ci-dessous va vous servir à choisir votre version de TYPO3 et à lancer les serveurs Apache et MySQL. 
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-8.jpg" title="Installation Windows - 8" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-8.jpg" alt="Installation Windows - 8" width="157" height="71" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								5. Une erreur fréquente peut se produire lorsque le port 80 est déjà utilisé par une autre application. Dans notre exemple il s'agit de Skype. Le log du lanceur vous retournera donc l'erreur suivante :
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-9.jpg" title="Installation Windows - 9" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-9.jpg" alt="Installation Windows - 9" width="157" height="127" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								6. Il suffit de quitter Skype, (vous pourriez aussi dire à Apache d'écouter sur un autre port, la manipulation n'est pas très difficile).
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<img src="/uploads/images/t3fr-uni-2006/install-win/t3-win-10.jpg" alt="Installation Windows - 10" width="152" height="68" />
									</div>
								</div>
							</div>
							<div class="clearer">
								7. Une fois que le logiciel qui utilise le port 80 est arrêté, le serveur démarre correctement.
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-11.jpg" title="Installation Windows - 11" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-11.jpg" alt="Installation Windows - 11" width="157" height="127" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								8. Le navigateur par défaut s'ouvre et vous affiche la page suivante:
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-12.jpg" title="Installation Windows - 12" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-12.jpg" alt="Installation Windows - 12" width="210" height="182" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								9. Vous n'avez plus qu'à choisir l'élément désiré (par exemple, le backend TYPO3).
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-13.jpg" title="Installation Windows - 13" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-13.jpg" alt="Installation Windows - 13" width="211" height="183" /></a>
									</div>
								</div>
							</div>
							<h3 class="clearer">Autres informations utiles</h3>
							<div class="clearer">
								1. Les répertoires de l'installeur Typo3Winstaller :
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-14.jpg" title="Installation Windows - 14" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-14.jpg" alt="Installation Windows - 14" width="208" height="152" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								2. Le fichier de configuration d'Apache se trouve dans /apache/conf.
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-15.jpg" title="Installation Windows - 15" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-15.jpg" alt="Installation Windows - 15" width="211" height="160" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								3. Le fichier php.ini se trouve dans /apache/bin/.
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-16.jpg" title="Installation Windows - 16" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-16.jpg" alt="Installation Windows - 16" width="208" height="199" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								4. Dans sa configuration de base, Apache ne peut pas être interrogé depuis une autre machine.<br />
								Si vous désirez tester votre site TYPO3 depuis une autre machine, il faudra modifier le fichier httpd.conf comme ci-dessous:
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-17.jpg" title="Installation Windows - 17" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-17.jpg" alt="Installation Windows - 17" width="212" height="182" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-18.jpg" title="Installation Windows - 18" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-18.jpg" alt="Installation Windows - 18" width="209" height="181" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								5. Si au lieu de taper l'adresse ip de votre machine de test vous désirez taper un nom (par exemple : dev.typo3), il faudra modifier les fichiers hosts de votre machine comme ci dessous. Le fichier hosts se trouve dans : Windows/system32/drver/etc/.
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-19.jpg" title="Installation Windows - 19" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-19.jpg" alt="Installation Windows - 19" width="208" height="168" /></a>
									</div>
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-20.jpg" title="Installation Windows - 20" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-20.jpg" alt="Installation Windows - 20" width="208" height="168" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								6. Ajoutez l'entrée désirée:
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-21.jpg" title="Installation Windows - 21" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-21.jpg" alt="Installation Windows - 21" width="208" height="168" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								7. Sauvez le fichier:
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-22.jpg" title="Installation Windows - 22" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-22.jpg" alt="Installation Windows - 22" width="208" height="168" /></a>
									</div>
								</div>
							</div>
							<div class="clearer">
								8. Le résultat:
							</div>
							<div class="clearer">
								<div class="gallery">
									<div class="left">
										<a href="/uploads/images/t3fr-uni-2006/install-win/t3-win-23.jpg" title="Installation Windows - 23" rel="lightbox"><img src="/uploads/images/t3fr-uni-2006/install-win/thumb-t3-win-23.jpg" alt="Installation Windows - 23" width="177" height="195" /></a>
									</div>
								</div>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
