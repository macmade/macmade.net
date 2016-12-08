<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" /><br />
							</div>
							<h1>T3FRUniversity 2006 - Atelier installation</h1>
							<h2>Linux - Debian</h2>
							<div>
								<h3>Obtenir Debian</h3>
								<div>
									Debian existe en plusieurs distributions. La version <span class="strong">«stable»</span>, la version <span class="strong">«testing»</span>, et la version <span class="strong">«unstable»</span>.<br />
									Celle-ci représentent les différentes phases de développement du projet.
								</div>
								<ul>
									<li>
										La version stable est la version actuelle, testée sur la plupart des plateformes.
									</li>
									<li>
										La version testing est une «pre-release» de la prochaine version du système.
									</li>
									<li>
										La version unstable, quant à elle, est la version en cours de développement.
									</li>
								</ul>
								<div>
									Pour une installation sur un serveur de production, la version stable est de rigueur, pour des raisons de sécurité évidentes.<br />
									Cependant, pour une installation sur un serveur de développement, la version testing peut être une bonne chose, en raison des versions plus récentes des différents programmes, par rapport à la version stable.
								</div>
								<div>
									Les différentes version de Debian peuvent être téléchargées librement à partir du <a href="http://www.debian.org/" title="Debian GNU Linux">site officiel de Debian</a>:
								</div>
								<ul>
									<li>
										Version stable (Intel x86):<br />
										<a href="http://www.debian.org/ports/i386/" title="Debian - Stable x86">www.debian.org/ports/i386</a>
									</li>
									<li>
										Version stable (PowerPC):<br />
										<a href="http://www.debian.org/ports/powerpc/" title="Debian - Stable PPC">www.debian.org/ports/powerpc</a>
									</li>
									<li>
										Version stable (toutes plateformes):<br />
										<a href="http://www.debian.org/releases/stable/" title="Debian - Stable">www.debian.org/releases/stable</a>
									</li>
									<li>
										Version stable (liste des mirroirs):<br />
										<a href="http://www.debian.org/CD/http-ftp/" title="Debian - Mirroires">www.debian.org/CD/http-ftp</a>
									</li>
									<li>
										Version testing (toutes plateformes):<br />
										<a href="http://www.debian.org/devel/debian-installer/" title="Debian - Testing">www.debian.org/devel/debian-installer</a>
									</li>
								</ul>
							</div>
							<div>
								<h3>Installation des paquets</h3>
								<div>
									Voici la liste des paquets à installer pour obtenir un système prêt pour TYPO3:
								</div>
								<ul>
									<li>
										mysql-server-4.1
									</li>
									<li>
										apache2
									</li>
									<li>
										libapache2-mod-php4
									</li>
									<li>
										libapache2-mod-security
									</li>
									<li>
										php4
									</li>
									<li>
										php4-dev
									</li>
									<li>
										php4-cli
									</li>
									<li>
										php4-curl
									</li>
									<li>
										php4-curl
									</li>
									<li>
										php4-domxml
									</li>
									<li>
										php4-gd
									</li>
									<li>
										php4-imagick
									</li>
									<li>
										php4-imap
									</li>
									<li>
										php4-ldap
									</li>
									<li>
										php4-mcal
									</li>
									<li>
										php4-mcrypt
									</li>
									<li>
										php4-mhash
									</li>
									<li>
										php4-mysql
									</li>
									<li>
										php4-odbc
									</li>
									<li>
										php4-ps
									</li>
									<li>
										php4-recode
									</li>
									<li>
										php4-xslt
									</li>
									<li>
										mcrypt
									</li>
									<li>
										catdoc
									</li>
									<li>
										xlhtml
									</li>
									<li>
										ppthtml
									</li>
									<li>
										htmldoc
									</li>
									<li>
										xpdf-utils
									</li>
									<li>
										freetype2
									</li>
									<li>
										imagemagick
									</li>
									<li>
										bzip2
									</li>
									<li>
										zip
									</li>
									<li>
										unzip
									</li>
									<li>
										ssh
									</li>
									<li>
										gs
									</li>
									<li>
										aspell
									</li>
									<li>
										aspell-fr
									</li>
								</ul>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
