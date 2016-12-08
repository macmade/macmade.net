<?php
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	// Start page
	$PAGE->start();
?>
							<h1>TYPO3 - Fonctionnalités</h1>
							<div>Voici une liste détaillée, mais non exhaustive, des fonctionnalités majeures qu'offre TYPO3. Certaines d'entre-elles sont intégrées directement au noyau du logiciel, alors que d'autres peuvent être ajoutées par l'installation de modules spécifiques, disponibles librement sur un serveur centralisé (TER).</div>
							<h2>Ergonomie / facilité d'utilisation pour les contributeurs</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Editeur «Rich Text» (RTE)
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Un éditeur comportant des fonctionnalités similaires aux programmes de traitement de texte comme MSWord ou OpenOffice, compatible aussi bien avec Internet Explorer que Mozilla/FireFox. Des feuilles de styles CSS spécifiques peuvent être ajoutées, pour faciliter le formatage du contenu. Chaque fonction/bouton de cet éditeur est en outre configurable par les administrateurs.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Interface intuitive
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les pages sont organisées et affichées, dans l'interface d'administration, comme une structure hiérarchique d'objets, reflétant la structure exacte du site. Il en va de même pour l'affichage des fichiers et documents. Ce type d'affichage permet aux contributeurs d'évoluer dans un système unifié et intuitif, et de retrouver facilement leurs pages et documents.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Correcteur orthographique
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Un correcteur orthographique multi langue est inclus de base dans l'éditeur «Rich Text».
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Interface utilisateur configurable
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											L'interface d'administration est entièrement configurable, et ce pour chaque utilisateur.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Annulation / Historique
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 possède un historique illimité. Chaque intervention peut être annulée à tout instant.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Presse-papier
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 inclut des fonctions de copier-coller pour les pages, les éléments de contenu, ainsi que les fichiers externes.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Modes d'édition multiples
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les utilisateurs peuvent choisir d'éditer leurs pages depuis le site lui-même ou depuis l'interface d'administration.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Prévisualisation du contenu
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les contenus cachés, ou possédant des restrictions d'accès peuvent être prévisualisés avant toute publication.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Edition multiples
											</span>
										</td>
										<td>
										</td>
										<td>
										</td>
										<td>
											Un nombre illimité de pages ou d'éléments de contenus peuvent être chargés dans une interface d'édition unique, permettant ainsi aux contributeurs de changer en une seule fois des valeurs sur de multiples enregistrements.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Raccourcis internes
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les opérations fréquemment utilisées peuvent être appelées en un clic par le biais de raccourcis configurables par les utilisateurs et/ou les administrateurs.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Centre des tâches
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Chaque contributeur a la possibilité d'utiliser un centre des tâches, pour créer et gérer ses projets, prendre des notes, gérer ses préférences, etc. Un système de messagerie interne entre contributeurs est également inclus dans ce centre des tâches.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Moteur de recherche interne
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Les contributeurs peuvent rechercher des éléments précis dans une section du site, à l'aide du moteur de recherche interne, intégré à l'interface d'administration. Les pages ou éléments de contenu résultants de cette recherche peuvent ensuite être édités simultanément.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestion documentaire
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											TYPO3 inclus un système de gestion documentaire (DAM &#8211; Digital Asset Management), permettant l'indexation, la recherche et l'utilisation de n'importe quel média. Des méta données peuvent être ajoutées aux documents, ou directement extraites. Ce module offre également un système de catégorisation extensible à souhait. L'interface permet aux contributeurs d'effectuer des recherches complexes dans la base documentaire, à l'aide de filtres qui peuvent être mémorisés et partagés. L'indexation des médias peut se faire manuellement, ou automatiquement.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												WorkSpace
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Le concept de WorkSpace reprend les fonctionnalités d'un workflow et d'un système de versionning. Chaque utilisateur à la possibilité d'utiliser un ou plusieurs espaces de travail, en fonction de son rôle. A chaque modification d'une page ou d'un élément de contenu, une nouvelle version est créée, et peut être soumise à validation avant sa publication sur l'espace en ligne. Ces espaces de travail peuvent être appliqués aussi bien à une section particulière qu'à l'entier du site, permettant ainsi aux contributeurs, administrateurs ou développeurs de travailler de manière totalement indépendante, sans risque de gêner les autres utilisateurs, et ce quelles que soient les modifications apportées.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Facilité d'utilisation pour les administrateurs</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Gestion de sites multiples
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Plusieurs sites peuvent exister dans une seule instance de TYPO3, et partager ou non la même base de données.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestion de domaines multiples
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											De multiples domaines et/ou sous-domaines peuvent pointer sur une seule instance de TYPO3, et être dirigés vers une partie précise du/des site(s).
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Administration des utilisateurs/groupes
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Toutes les fonctionnalité peut être configurée pour chaque utilisateur et/ou groupe, de manière visuelle. TYPO3 offre au niveau gestion une granularité tout à fait exceptionnelle. Chaque champ de la base de donnée peut en effet être activé ou non, et se voir affecter une valeur par défaut. Les administrateurs ont également la possibilité de comparer les permissions spécifiques affectées aux utilisateurs, et d'avoir une vue globale des privilèges accordés.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Permissions
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 utilise un système de permissions extrêmement poussé, basé sur le même principe que les permissions de fichiers des systèmes Unix. Chaque page ou section peut se voir affecter des permissions pour son créateur, son groupe, et les autres utilisateurs. Ces privilèges comprennent l'affichage, l'édition, la création de contenu, et la création de sous-pages.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Changement de compte à la volée
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les administrateurs ont à tout instant la possibilité de passer sur un compte utilisateur, et de revenir ensuite à leur propre session.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestionnaire d'extensions
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Tous les modules externes développés pour TYPO3 sont centralisés sur un serveur, accessible directement depuis l'interface d'administration. Les administrateurs peuvent installer, mettre à jour et supprimer des modules spécifiques, des manuels, ainsi que des traductions supplémentaires. Un module additionnel permet également aux développeurs de créer une base de travail pour leurs futures extensions, qui pourront ensuite être publiées.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Gabarits</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Import et intégration WYSIWYG
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Les gabarits peuvent être créés dans n'importe quel éditeur HTML (GoLive, Dreamweaver, etc), sans aucune contrainte, et être ensuite importés dans TYPO3. L'affectation des éléments dynamiques se fait ensuite de manière visuelle, en quelques clics. Les gabarits peuvent également être mis à jour en temps réel, par le même mécanisme. Ce moteur de gabarit est totalement unique dans le monde des CMS, et offre une souplesse inégalée à ce jour.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Feuilles de styles
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Tous les différents composants, internes ou externes, peuvent être mis en forme par le biais de feuilles de styles CSS. Chaque page peut contenir ses propres feuilles de styles, et hériter de celles des pages parentes.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gabarits multiples
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 permet d'intégrer et de gérer un nombre illimité de gabarits. Ces gabarits peuvent partager une même structure et être hiérarchisés en fonction de leur type (gabarit secondaire, gabarit d'impression, etc.).
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gabarits de contenus (FlexContent)
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Des gabarits spécifiques peuvent également être créés pour les éléments de contenus, exactement de la même façon que pour les pages.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Menus dynamiques
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les menus et sous-menus, basés sur la hiérarchie des pages, sont créés et mis à jour en temps réel. Ils peuvent avoir des états conditionnels, en fonction de leur position, des accès, du type de page, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Menus graphiques dynamiques
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 est également capable de générer des menus graphiques, avec des images et du texte dynamique.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Types de menus multiples
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											De nombreux types de menus peuvent être utilisés: menus horizontaux ou verticaux (texte ou image), éléments de liste, menus déroulants DHTML, chemins d'accès, ou encore menus Flash-XML.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Sécurité</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Journal / historique
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Les administrateurs ont accès à un journal comportant toutes les modifications et connexions effectuées sur le site. Chaque modification peut être invalidée à tout instant.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Services d'authentification
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											TYPO3 peut utiliser de manière totalement transparente et automatisée des services d'authentification externes, comme un serveur LDAP, ActiveDirectory, Oracle, MS-SQL, Sybase, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Contrôle des adresses IP
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Chaque utilisateur peut être obligé à se connecter depuis une certaine adresse IP, ou une certaine zone.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Alertes email
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Des alertes peuvent être envoyées par email aux administrateurs lors d'une tentative de connexion infructueuse.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestion de l'édition
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											En cas d'édition simultanée d'un même contenu par deux utilisateurs, un avertissement est immédiatement affiché.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Support SSL
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 peut utiliser des connexions sécurisées SSL pour sa partie d'administration, ainsi que pour les pages du site.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Respect des standards</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Accessibilité (WAI)
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Le noyau de TYPO3 est conçu pour respecter les normes internationales d'accessibilité, garantissant un accès optimal pour les personnes souffrant de handicaps.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												XHTML
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Le code HTML généré par le système et les modules externes peut être nettoyé automatiquement pour assurer une compatibilité avec la norme XHTML.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Exportation
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Le contenu du site, ainsi que sa structure peuvent être exportés au format XML, pour une utilisation dans des animations Flash, ou une transformation en vue d'une impression. Le système est également capable de gérer les formats WML, WAP, PDF.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Performance</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Moteur de cache
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 inclut un moteur de cache unique, incluant plusieurs niveaux, permettant de mettre en cache de manière indépendante et personnalisable les menus de navigation, les pages et les éléments de contenu. Ce cache est contrôlable par les administrateurs, et permet un gain important sur les performances du serveur.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Publication statique
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Chaque page du site peut être publiée en tant que page HTML statique, afin d'améliorer encore les performances.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Flexibilité</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Réutilisation de contenu
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Un même contenu peut être partagé entre plusieurs pages. Les pages elles-mêmes peuvent être importées dynamiquement sur plusieurs sections différentes.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Interface multi langue
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											La totalité de l'interface d'administration est disponible dans plusieurs langues.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Insertion de méta données
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Chaque page peut recevoir ses propres méta données, et ce pour chaque langue ou gabarit utilisé.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Contenu multi langue
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											TYPO3 est conçu de base pour offrir des fonctionnalités multi langue, au niveau du contenu. Une page peut être traduite intégralement, avec son contenu, et/ou présenter un contenu différent en fonction de la langue utilisée.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Réécriture d'URL
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Les URLs peuvent être réécris de plusieurs manières différentes (ex. www.domain.com/about.html, www.domain.com/about/ ou encore www.domain.com/about/company.html). Ce type de fonction permet au site dynamique d'être indexé de manière optimale par les moteurs de recherche comme Google.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Contenu conditionnel
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											La disponibilité des pages et de leurs éléments de contenu peut être régie par des règles conditionnelles (données temporelles, adresse IP, langage, utilisateur/groupe, navigateur, plateforme, etc.).
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Fonctions diverses</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Moteur de recherche indexée
											</span>
										</td>
										<td>
										</td>
										<td>
										</td>
										<td>
											Un des atouts majeurs de TYPO3 est son moteur de recherche indexée. Ce moteur est extrêmement complet, et permet également d'indexer des documents externes, comme des fichiers Word, Excel, PowerPoint, OpenOffice ou encore PDF. Une extension de ce module permet d'effectuer des recherches sur des sites distants.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Blog
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Intégration de systèmes de blogs classiques, avec commentaires, liens permanents, trackback, flux RSS/RDF/Atom, API Blogger, API metaWeblog, intégration FlickerRSS, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Calendrier
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											De nombreux modules spécifiques de calendrier sont disponibles. Parmi leurs fonctionnalités, ont peut par exemple noter l'import/export de calendriers au format vCal ou ICS, la gestion d'évènements récurents, des affichages multiples, ou encore l'affichage de calendriers distants.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Chat
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Système de chat basé sur AJAX (Asynchronous Javascript And Xml).
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Communauté
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											De nombreux modules communautaires peuvent être installés, avec des fonctions telles que des listes d'utilisateurs avec affichage des profils, des modules d'édition des profils, des livres d'or, des systèmes de messagerie instantanée, des liste de contacts, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestion de contacts
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Système de gestion d'adresses, basé sur la norme vCard.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Newsletter
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Système avancé de newsletter, permettant d'envoyer des email à des groupes d'utilisateurs en quelques clics.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Forum
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											TYPO3 possède son propre forum de discussion, développé spécifiquement pour lui. Il contient toutes les fonctionnalités classique des autres systèmes, et peut être couplé au module de news.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestion / distribution de documents
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Module d'affichage de documents MS Office ou OpenOffice, avec liste de fichiers, gestion des téléchargements, tracking, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Gestion de formulaires
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											TYPO3 est capable de générer des formulaires complexes, créés à l'aide d'une interface intuitive. Les résultats peuvent être sauvegardés dans la base de données et exportés dans différents formats.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Livre d'or
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Nombreux systèmes de livre d'or, du plus simple au plus complexe.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Annuaire web
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Système de gestion de liens internet, avec soumission, détection des erreurs, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Intégration multimédia
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Intégration d'éléments multimédia comme des vidéos, des animations Flash, des applets Java, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Pages d'accueil personnalisées
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Lors d'une connexion, chaque utilisateur peut être redirigé vers une page d'accueil spécifique et personnalisable.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Profils utilisateurs
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Modules permettant à chaque utilisateur de se connecter, éditer son profil, changer son mot de passe, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												News
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Système complexe de gestion d'articles, avec archivage automatique ou manuel, moteur de recherche dédié, catégorisation, publication RSS et contrôle d'accès. Ce module peut être couplé avec un forum.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Syndication de contenu (RSS)
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Ajout et export de contenu importé depuis/vers des flux RSS.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Questionnaire / Quizz
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Génération de tests en ligne, avec un nombre illimité de questions/réponses. Les résultats peuvent être envoyés par email et/ou récupérés au format CSV.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Services web
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Intégration de l'API Google, etc.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Wiki
											</span>
										</td>
										<td>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Intégration des systèmes contributifs Wiki.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Traitement d'images</h2>
							<table>
								<thead>
									<tr>
										<th>
											Fonctionnalité:
										</th>
										<th>
											Noyau:
										</th>
										<th>
											Extension:
										</th>
										<th>
											Description:
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Redimensionnement
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Gestion par ImageMagick.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Recadrage
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
											Gestion par ImageMagick. Possibilité d'utiliser une interface Flash pour le recadrage des images.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Conversion de format
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Support et conversion des formats GIF, JPEG, PNG, EPS, TIFF, AI, PDF. Gestion par ImageMagick.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Ajout de texte dynamique
											</span>
										</td>
										<td class="center" style="width: 10%;">
											<span class="red">X</span>
										</td>
										<td>
										</td>
										<td>
											Gestion par GDLib / FreeType.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Autres</h2>
							<table>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Documentation
											</span>
										</td>
										<td>
											Chaque fonction disponible sur TYPO3 est répertoriée et documentée sur le site internet typo3.org. Ces manuels, disponibles également pour les modules externes, peuvent être consultés directement en ligne, ou téléchargés. Certaines documentations sont disponibles sous forme de tutoriaux vidéo.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												API
											</span>
										</td>
										<td>
											TYPO3 comporte un API (Application Programming Interface) extrêmement puissant, et très bien documenté, permettant aux développeurs d'étendre le noyau de base et d'intégrer d'autres applications.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Communauté
											</span>
										</td>
										<td>
											La communauté de développeurs TYPO3 est très active. De nombreux événements sont organisés chaque année, et ce dans le monde entier.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Livres
											</span>
										</td>
										<td>
											De nombreux livres sur TYPO3 ont été publiés. On en compte actuellement 14 en allemand, 2 en anglais, et 2 en français.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Magazine
											</span>
										</td>
										<td>
											TYPO3 a son propre magazine, publié 4 fois par an, sur le marché allemand, suisse et autrichien.
										</td>
									</tr>
								</tbody>
							</table>
							<h2>Environnement logiciel</h2>
							<table>
								<tbody>
									<tr>
										<td style="width: 20%;">
											<span class="strong">
												Serveur internet
											</span>
										</td>
										<td>
											Apache, IIS.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Base de données
											</span>
										</td>
										<td>
											MySQL. Support pour Oracle, MS-SQL, ODBC, LDAP &#8211; virtuellement toute source externe de données.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Langage de programmation
											</span>
										</td>
										<td>
											PHP.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Système d'exploitation
											</span>
										</td>
										<td>
											Unix, Linux, MacOSX, Win32.
										</td>
									</tr>
									<tr>
										<td>
											<span class="strong">
												Navigateurs
											</span>
										</td>
										<td>
											Internet Explorer, FireFox, Mozilla, Netscape, Opera, Safari, Konqueror, toutes plateformes confondues.
										</td>
									</tr>
								</tbody>
							</table>
<?php
	// End page
	$PAGE->end();
?>
