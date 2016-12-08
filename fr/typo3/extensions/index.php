<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Développement d'extensions TYPO3</h1>
							<div class="clearer">
								<ul>
									<li>
										<a href="#tscobj" title="Content Element From TypoScript">Content Element From TypoScript</a>
									</li>
									<li>
										<a href="#content_uneraser" title="Content Uneraser">Content Uneraser</a>
									</li>
									<li>
										<a href="#db_sync" title="DB Sync">DB Sync</a>
									</li>
									<li>
										<a href="#api_macmade" title="Developer API">Developer API</a>
									</li>
									<li>
										<a href="#dropdown_sitemap" title="Drop-Down Site Map">Drop-Down Site Map</a>
									</li>
									<li>
										<a href="#flash_pageheader" title="Flash Page Header">Flash Page Header</a>
									</li>
									<li>
										<a href="#slideshow" title="Flash SlideShow">Flash SlideShow</a>
									</li>
									<li>
										<a href="#flvplayer" title="Flash Video Player">Flash Video Player</a>
									</li>
									<li>
										<a href="#formbuilder" title="Form Builder">Form Builder</a>
									</li>
									<li>
										<a href="#fe_mp3player" title="FrontEnd MP3 Player">FrontEnd MP3 Player</a>
									</li>
									<li>
										<a href="#ftpbrowser" title="FTP Browser">FTP Browser</a>
									</li>
									<li>
										<a href="#homedirs" title="Home Directories">Home Directories</a>
									</li>
									<li>
										<a href="#rtehtmlarea_openoffice" title="HTMLArea RTE / OpenOffice Skin">HTMLArea RTE / OpenOffice Skin</a>
									</li>
									<li>
										<a href="#hypernav" title="Hyper Navigation System">Hyper Navigation System</a>
									</li>
									<li>
										<a href="#lightskin" title="Light Skin For TYPO3">Light Skin For TYPO3</a>
									</li>
									<li>
										<a href="#loginbox_macmade" title="LoginBox / macmade.net">LoginBox / macmade.net</a>
									</li>
									<li>
										<a href="#doc_macosxclient" title="Mac OS X 10.3 Client Installation">Mac OS X 10.3 Client Installation</a>
									</li>
									<li>
										<a href="#mozsearch" title="Mozilla/Firefox Search Plugin Generator">Mozilla/Firefox Search Plugin Generator</a>
									</li>
									<li>
										<a href="#newrecordwiz" title="New Record Wizard CSM">New Record Wizard CSM</a>
									</li>
									<li>
										<a href="#ldap_macmade" title="OpenLDAP / macmade.net">OpenLDAP / macmade.net</a>
									</li>
									<li>
										<a href="#js_select" title="Page JavaScript Selector">Page JavaScript Selector</a>
									</li>
									<li>
										<a href="#css_select" title="Page StyleSheet Selector">Page StyleSheet Selector</a>
									</li>
									<li>
										<a href="#setpagetype" title="Set Page Type CSM">Set Page Type CSM</a>
									</li>
									<li>
										<a href="#toc_macmade" title="Table of contents">Table of contents</a>
									</li>
									<li>
										<a href="#vd_geomap" title="VD / Geomap">VD / Geomap</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<h2>Statistiques</h2>
								<ul>
									<li>
										Extensions publiées: <span class="strong">25</span>
									</li>
									<li>
										Extensions documentées: <span class="strong">23</span>
									</li>
									<li>
										Traductions des manuels: <span class="strong">14</span>
									</li>
									<li>
										Extensions en état «stable»: <span class="strong">20</span>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="tscobj"></a>
								<h3 class="border-red">Content Element From TypoScript</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/tscobj.gif" alt="tscobj" width="200" height="253" class="right" />
								</div>
								<div class="italic">
									(tscobj)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.1
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object
									</li>
								</ul>
								<div>
									Le but de cette extension est de rendre n'importe quel objet TypoScript défini dans le gabarit du site disponible en tant qu'élément de contenu normal. Si vous avez, par exemple, défini un menu dans votre gabarit TS, cette extension vous permettra de le placer dans une page, comme un élément texte ou image standard.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/tscobj/0.1.1/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/tscobj/0.1.1/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_tscobj_fr/0.1.1/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="content_uneraser"></a>
								<h3 class="border-red">Content Uneraser</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/content_uneraser.gif" alt="content_uneraser" width="200" height="110" class="right" />
								</div>
								<div class="italic">
									(content_uneraser)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.2.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Backend modules
									</li>
								</ul>
								<div>
									Cette extension permet aux utilisateurs backend de récupérer du contenu effacé depuis toutes les tables disponibles dans la base de données TYPO3.  Dans TYPO3, lorsqu'un enregistrement est effacé, il n'est pas réellement détruit de la base de données. Normalement, chaque enregistrement contient un marqueur d'effacement. Lorsque celui-ci est activé, l'enregistrement n'est plus du tout pris en compte par les requêtes sur la base de données. Il paraît donc effacé, mais il demeure en fait dans la base de données pour toujours.  Avec cette extension, vous pourrez voir ces enregistrement effacés et, soit les récupérer, soit les effacer définitivement, afin d'éviter que la base de données soit encombrée par d'anciens enregistrements.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/content_uneraser/0.2.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/content_uneraser/0.2.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_uneraser_fr/0.2.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="db_sync"></a>
								<h3 class="border-red">DB Sync</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/db_sync.gif" alt="db_sync" width="200" height="155" class="right" />
								</div>
								<div class="italic">
									(dbsync)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Beta
									</li>
									<li>
										Catégorie: Backend modules
									</li>
								</ul>
								<div>
									Cette extension vous permet de synchroniser votre base de données TYPO3 avec une base de données externe. Elle vous permet également de synchroniser deux différentes tables au sein d'une même base de données.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/dbsync/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/dbsync/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_dbsync_fr/0.1.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="api_macmade"></a>
								<h3 class="border-red">Developer API</h3>
								<div class="italic">
									(api_macmade)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.2.7
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: APIs
									</li>
								</ul>
								<div>
									Le but de cet API est de fournir à la communauté des développeurs TYPO3 des fonctions utiles lors du processus de développement d'extensions. Il inclut des fonctions pour de la programmation frontend, backend, des fonctions de programmation de base de données, et de développement général. Cet API n'est pas là pour remplacer les classes existantes de TYPO3, mais pour les compléter, en fournissant un moyen rapide pour développer des extensions et produire du code.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/api_macmade/0.2.7/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/api_macmade/0.2.7/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="dropdown_sitemap"></a>
								<h3 class="border-red">Drop-Down Site Map</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/dropdown_sitemap.gif" alt="dropdown_sitemap" width="200" height="200" class="right" />
								</div>
								<div class="italic">
									(dropdown_sitemap)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 1.2.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object
									</li>
								</ul>
								<div>
									Ce plugin ajoute un nouveau type de menu/plan de site aux éléments de contenu de TYPO3. Il utilise des listes HTML, des feuilles de styles et du JavaScript pour générer un plan du site déroulant, permettant d'afficher / masquer chaque section.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/dropdown_sitemap/1.2.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/dropdown_sitemap/1.2.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_dropdownsmap_fr/1.2.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="flash_pageheader"></a>
								<h3 class="border-red">Flash Page Header</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/flash_pageheader.gif" alt="flash_pageheader" width="200" height="60" class="right" />
								</div>
								<div class="italic">
									(flash_pageheader)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 1.0.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Frontend
									</li>
								</ul>
								<div>
									L'extension Flash Page Header permet l'utilisation de fichiers SWF dynamiques, comme entêtes de page. Elle utilise le langage XML pour communiquer avec TYPO3, depuis Flash. Vous allez apprendre, dans ce manuel, comment utiliser et paramètrer cette extension, et comment créer vos propres fichiers Flash. Une animation par défaut est inclue (disponible aux formats .swf et .fla). Vous êtes libres d'utiliser ces fichiers comme bon vous semble, et de les utiliser dans vos projets.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/flash_pageheader/1.0.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/flash_pageheader/1.0.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_flashpagehead_fr/1.0.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="slideshow"></a>
								<h3 class="border-red">Flash SlideShow</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/slideshow.gif" alt="slideshow" width="200" height="110" class="right" />
								</div>
								<div class="italic">
									(slideshow)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.2.2
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object, Content goodies, Commerce/Advertising
									</li>
								</ul>
								<div>
									Cette extension vous permets d'afficher des séquences d'images, avec des transitions fluides entre chacune d'elles. Vous pourrez ainsi apporter un peu de vie dans vos pages HTML, et afficher de nombreuses images sans avoir besoin de rafraîchir une page.Cette extension est une intégration d'un lecteur de présentations Flash existant, développé par Jeroen Wijering - www.jeroenwijering.com. Merci beaucoup à lui pour son excellent travail. Notez que ce logiciel est publié sous une licence creative commons (détails: http://creativecommons.org/licenses/by-nc-sa/2.5/). Merci de contacter son auteur pour toute utilisation commerciale.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/slideshow/0.2.2/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/slideshow/0.2.2/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_slideshow_fr/0.2.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="flvplayer"></a>
								<h3 class="border-red">Flash Video Player</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/flvplayer.gif" alt="flvplayer" width="200" height="138" class="right" />
								</div>
								<div class="italic">
									(flvplayer)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object, Content goodies
									</li>
								</ul>
								<div>
									Ce lecteur de vidéos Flash (FLV) vous permet de montrer vos vidéos de manière parfaitement contrôlée, et de manière plus large qu'avec QuickTime, Windows Media ou Real Media.Cette extension est une intégration d'un lecteur vidéo existant, développé par Jeroen Wijering - www.jeroenwijering.com. Merci beaucoup à lui pour son excellent travail. Notez que ce logiciel est publié sous une licence creative commons (détails: http://creativecommons.org/licenses/by-nc-sa/2.5/). Merci de contacter son auteur pour toute utilisation commerciale.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/flvplayer/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/flvplayer/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_flvplayer_fr/0.1.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="formbuilder"></a>
								<h3 class="border-red">Form Builder</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/formbuilder.gif" alt="formbuilder" width="200" height="195" class="right" />
								</div>
								<div class="italic">
									(formbuilder)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Experimental
									</li>
									<li>
										Catégorie: Frontend plugins
									</li>
								</ul>
								<div>
									L'extension Form Builder est un outil conçu pour vous aider à créer n'importe quel type de formulaire, dans un contexte «frontend». Elle inclut également un module «back-end» de gestion. Le but de cette extension est de fournir un procédé de création de formulaire plus flexible que le procédé TypoScript existant. Tout est basé sur du XML, avec des flexforms TYPO3.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/formbuilder/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/formbuilder/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_formbuilder_fr/0.1.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="fe_mp3player"></a>
								<h3 class="border-red">FrontEnd MP3 Player</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/fe_mp3player.gif" alt="fe_mp3player" width="200" height="200" class="right" />
								</div>
								<div class="italic">
									(fe_mp3player)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.2.3
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object, Content goodies
									</li>
								</ul>
								<div>
									Ce lecteur MP3 inclus de nombreux modes le lecture, du streaming, une tête de lecture déplaçable et un égaliseur. Les listes de lectures sont créées visuellement dans le backend TYPO3. Tous les paramètres peuvent être définis dans chaque instance du plugin par des flexforms.Cette extension est une intégration d'un lecteur MP3 existant, développé par Jeroen Wijering - www.jeroenwijering.com. Merci beaucoup à lui pour son excellent travail. Notez que ce logiciel est publié sous une licence creative commons (détails: http://creativecommons.org/licenses/by-nc-sa/2.5/). Merci de contacter son auteur pour toute utilisation commerciale.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/fe_mp3player/0.2.3/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/fe_mp3player/0.2.3/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_femp3player_fr/0.1.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="ftpbrowser"></a>
								<h3 class="border-red">FTP Browser</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/ftpbrowser.gif" alt="ftpbrowser" width="200" height="143" class="right" />
								</div>
								<div class="italic">
									(ftpbrowser)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.2
									</li>
									<li>
										Etat: Beta
									</li>
									<li>
										Catégorie: Backend modules
									</li>
								</ul>
								<div>
									Un module backend vous permettant d'administrer votre serveur web. Actuellement, il vous donne la possibilité de naviguer sur le serveur, d'éditer, créer ou effacer des fichiers ou des répertoires, de changer les droits sur les fichiers, d'uploader et de compresser des fichiers, etc...
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/ftpbrowser/0.1.2/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="homedirs"></a>
								<h3 class="border-red">Home Directories</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/homedirs.gif" alt="homedirs" width="200" height="123" class="right" />
								</div>
								<div class="italic">
									(homedirs)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.1
									</li>
									<li>
										Etat: Beta
									</li>
									<li>
										Catégorie: Backend modules
									</li>
								</ul>
								<div>
									Cette extension permet aux administrateurs de gérer les répertoires de départ des utilisateurs et groupes.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/homedirs/0.1.1/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/homedirs/0.1.1/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div><div class="clearer">
								<a name="rtehtmlarea_openoffice"></a>
								<h3 class="border-red">HTMLArea RTE / OpenOffice Skin</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/rtehtmlarea_openoffice.gif" alt="rtehtmlarea_openoffice" width="200" height="128" class="right" />
								</div>
								<div class="italic">
									(rtehtmlarea_openoffice)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Skins
									</li>
								</ul>
								<div>
									Une skin HTMLArea basée sur les icônes OpenOffice par Novell.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/rtehtmlarea_openoffice/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/rtehtmlarea_openoffice/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="hypernav"></a>
								<h3 class="border-red">Hyper Navigation System</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/hypernav.gif" alt="hypernav" width="200" height="110" class="right" />
								</div>
								<div class="italic">
									(hypernav)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Frontend Plugin
									</li>
								</ul>
								<div>
									L'extension Hyper Navigation System est un menu de type rootline, ou fil d'Ariane, dans lequel chaque section est menu déroulant contenant les sous-pages. Elle peut afficher autant de niveaux que vous le désirez. De cette manière, avec une simple rootline, chaque page de votre site internet est accessible depuis n'importe où.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/hypernav/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/hypernav/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_hypernav_fr/0.1.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="lightskin"></a>
								<h3 class="border-red">Light Skin For TYPO3</h3>
								<div class="italic">
									(lightskin)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.5
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Skins
									</li>
								</ul>
								<div>
									Une variante agréable et légère pour l'interface de TYPO3 3.7 et ultérieur. Il ne s'agit pas d'une adaptation d'une interface existante, mais d'une remise en forme complète de l'interface d'administration TYPO3, icônes et des feuilles de styles inclues. Plusieurs aspects de cette interface sont en outre paramétrables.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/lightskin/0.1.5/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="loginbox_macmade"></a>
								<h3 class="border-red">LoginBox / macmade.net</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/loginbox_macmade.gif" alt="loginbox_macmade" width="200" height="83" class="right" />
								</div>
								<div class="italic">
									(loginbox_macmade)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.3.3
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Frontend plugins
									</li>
								</ul>
								<div>
									Cette extension fournit une boîte de connexion simple, qui vous permet de spécifier un point de démarrage différent pour chaque instance du plugin.  Avec les autres systèmes, vous devez définir une page de stockage générale pour vos utilisateurs frontend. Malheureusement, il n'est pas possible de définir plusieurs pages de stockage générales, et d'autres extensions (comme TemplaVoila, News, etc.) ont besoin d'une telle page. Tous les enregistrements doivent donc être stockés au même endroit, ce qui peut aboutir à une situation un peu confuse.  C'est pour éviter cela que j'ai créé cette extension, que j'utilise dans mes projets TYPO3 personnels. J'ai appris que d'autres utilisateurs avaient le même type de problème, et c'est pour cette raison que j'ai décidé de rendre cette extension publique, en espérant qu'elle pourra être utile.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/loginbox_macmade/0.3.3/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/loginbox_macmade/0.3.3/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_loginboxmacmade_fr/0.3.3/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="doc_macosxclient"></a>
								<h3 class="border-red">Mac OS X 10.3 Client Installation</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/doc_macosxclient.gif" alt="doc_macosxclient" width="150" height="150" class="right" />
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 1.0.8
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Docs/FAQ/Tutorial
									</li>
								</ul>
								<div>
									Le but de ce manuel est de vous aider à installer et à configurer un serveur web, comprenant toutes les fonctionnalités requises pour une installation complète de TYPO3. Vous n'avez pas besoin de maîtriser les technologies Unix pour le suivre, mais si avez déjà un peu d'expérience dans ce domaine, cela vous sera sans doute fort utile. Si par contre vous ne vous sentez pas à l'aise avec Mac OS X, faites bien attention de suivre chaque étape de ce manuel, sans en omettre une seule. Vous allez apprendre à installer et à configurer un serveur internet, ainsi que tous les programmes et librairies nécessaires à l'utilisation d'un CMS comme TYPO3. Vous allez également découvrir le mode de fonctionnement interne de votre machine, ce qui vous aidera aussi, je l'espère, lors de l'utilisation quotidienne de votre Macintosh. 
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_macosxclient/1.0.8/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_macosxclient_fr/1.0.4/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="mozsearch"></a>
								<h3 class="border-red">Mozilla/Firefox Search Plugin Generator</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/mozsearch.gif" alt="mozsearch" width="200" height="243" class="right" />
								</div>
								<div class="italic">
									(mozsearch)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Frontend plugin
									</li>
								</ul>
								<div>
									Cette extension fournit un générateur dynamique de plugin de recherche pour les navigateurs de type Mozilla/Firefox. Elle permet aux visiteurs d'effectuer une recherche sur le site directement depuis la barre de recherche de leur navigateur.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/mozsearch/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/mozsearch/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="newrecordwiz"></a>
								<h3 class="border-red">New Record Wizard CSM</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/newrecordwiz.gif" alt="newrecordwiz" width="200" height="225" class="right" />
								</div>
								<div class="italic">
									(newrecordwiz)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Backend
									</li>
								</ul>
								<div>
									Cette extension ajoute un élément au menu contextuel de TYPO3 qui vous permet de créer des pages, du contenu et des éléments de base de données directement depuis le menu. De cette façon, vous avez à disposition les même fonctionnalités que dans l'assistant, sans avoir à le charger à chaque fois que vous désirez créer un nouvel élément.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/newrecordwiz/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/newrecordwiz/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="ldap_macmade"></a>
								<h3 class="border-red">OpenLDAP / macmade.net</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/ldap_macmade.gif" alt="ldap_macmade" width="200" height="282" class="right" />
								</div>
								<div class="italic">
									(ldap_macmade)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Alpha
									</li>
									<li>
										Catégorie: Backend module
									</li>
								</ul>
								<div>
									Cette extension permet l'import et l'authentification des utilisateurs TYPO3 (frontend &amp; backend) par le biais d'un serveur OpenLDAP. Elle permet également la synchronisation des utilisateurs LDAP avec d'autres tables de la base de données. La correspondance des champs se fait visuellement, par des flexforms.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/ldap_macmade/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/ldap_macmade/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="js_select"></a>
								<h3 class="border-red">Page JavaScript Selector</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/js_select.gif" alt="js_select" width="200" height="48" class="right" />
								</div>
								<div class="italic">
									(js_select)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.3.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Backend features
									</li>
								</ul>
								<div>
									Cette extension vous permet de sélectionner un ou plusieurs fichier(s) javascript pour chaque page de votre arborescence.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/js_select/0.3.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/js_select/0.3.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_jsselect_fr/0.3.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="css_select"></a>
								<h3 class="border-red">Page StyleSheet Selector</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/css_select.gif" alt="css_select" width="200" height="46" class="right" />
								</div>
								<div class="italic">
									(css_select)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.5.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Backend features
									</li>
								</ul>
								<div>
									Cette extension vous permet de séléctionner une ou plusieurs feuille(s) de styles pour chaque page de votre arborescence. Le but est de réduire le poids des pages générées par TYPO3 en incluant uniquement les styles nécessaires à une page.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/js_select/0.5.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/css_select/0.5.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/doc_cssselect_fr/0.5.0/view/" title="Documentation (Français)">Documentation (Français)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="setpagetype"></a>
								<h3 class="border-red">Set Page Type CSM</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/setpagetype.gif" alt="setpagetype" width="200" height="275" class="right" />
								</div>
								<div class="italic">
									(setpagetype)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina(macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Backend
									</li>
								</ul>
								<div>
									Cette extension ajoute un élément au menu contextuel de TYPO3 qui vous permet de choisir directement un type pour les pages de l'arborescence.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/setpagetype/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/setpagetype/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="toc_macmade"></a>
								<h3 class="border-red">Table of contents</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/toc_macmade.gif" alt="toc_macmade" width="200" height="116" class="right" />
								</div>
								<div class="italic">
									(toc_macmade)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.1
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object
									</li>
								</ul>
								<div>
									Cette extenion permet d'afficher de générer des tables des matières automatiques des éléments de contenus présents sur une page.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/toc_macmade/0.1.1/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/toc_macmade/0.1.1/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
							<div class="clearer">
								<a name="vd_geomap"></a>
								<h3 class="border-red">VD / Geomap</h3>
								<div>
									<img src="/uploads/images/typo3-extensions/vd_geomap.gif" alt="tscobj" width="200" height="219" class="right" />
								</div>
								<div class="italic">
									(vd_geomap)
								</div>
								<ul>
									<li>
										Auteur: Jean-David Gadina (macmade)
									</li>
									<li>
										Version: 0.1.0
									</li>
									<li>
										Etat: Stable
									</li>
									<li>
										Catégorie: Content object
									</li>
								</ul>
								<div>
									Cette extenion permet d'afficher des cartes de la Suisse, générées depuis le site <a href="http://www.geoplanet.vd.ch/" title="Geoplanet">Geoplanet</a>. Elle a été développée pour le site du <a href="http://www.vd.ch/" title="VD">Canton de Vaud</a>.
								</div>
								<ul>
									<li>
										<a href="http://typo3.org/extensions/repository/view/vd_geomap/0.1.0/" title="Infos sur l'extension">Infos sur l'extension</a>
									</li>
									<li>
										<a href="http://typo3.org/documentation/document-library/extension-manuals/vd_geomap/0.1.0/view/" title="Documentation (Anglais)">Documentation (Anglais)</a>
									</li>
								</ul>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
