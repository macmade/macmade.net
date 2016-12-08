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
	$player->playlist = '/uploads/playlists/t3fruni2005-ergo.xml';
?>
							<h1>T3FRUniversity 2005 - Ergonomie</h1>
							<h2>Conférence de Pascal Wicht (<a href="http://www.dataglove.ch/" title="DataGlove">DataGlove</a>) - Mardi 12 juillet 2005</h2>
							<?php
								echo($player->createPlayer());
							?>
							<h3 class="border">Sommaire</h3>
							<ul>
								<li>
									<a href="#ergo1" title="Ergonomie">Ergonomie</a>
								</li>
								<li>
									<a href="#ergo2" title="Comment naviguent les internautes">Comment naviguent les internautes</a>
								</li>
								<li>
									<a href="#ergo3" title="Graphisme">Graphisme</a>
								</li>
								<li>
									<a href="#ergo4" title="Charte des droits des users">Charte des droits des users</a>
								</li>
								<li>
									<a href="#ergo5" title="Chasseur cueilleur">Chasseur cueilleur</a>
								</li>
								<li>
									<a href="#ergo6" title="Le côté obsure du design">Le côté obsure du design</a>
								</li>
								<li>
									<a href="#ergo7" title="Les modes de lecture">Les modes de lecture</a>
								</li>
								<li>
									<a href="#ergo8" title="Caractéristiques humaines">Caractéristiques humaines</a>
								</li>
								<li>
									<a href="#ergo9" title="La symbolique">La symbolique</a>
								</li>
								<li>
									<a href="#ergo10" title="Les couleurs">Les couleurs</a>
								</li>
								<li>
									<a href="#ergo11" title="Liens et références">Liens et références</a>
								</li>
							</ul>
							<div>
								<a name="ergo1"></a>
								<h3 class="border">Ergonomie</h3>
								<div class="italic">
									du grec <span class="strong">"ergon"</span> (travail) et <span class="strong">"nomos"</span> (loi).
								</div>
								<div>
									<span class="strong">L'ergonomie</span> est définie comme "l'ensemble des connaissances scientifiques relatives à l'Homme nécessaires pour concevoir des outils, des machines et des dispositifs qui puissent être utilisés avec le maximum de confort, de sécurité et d'efficacité" (Alain Wisner).
								</div>
								<div>
									<span class="strong">L'ergonomie</span> recherche une adéquation entre caractéristiques humaines et caractéristiques de la machine. Il s'agit d'adapter la nature et le comportement de la machine au regard des caractéristiques de l'homme (et non l'inverse).
								</div>
								<div>
									<span class="strong">L'ergonomie</span> cognitive se base sur les connaissances concernant le fonctionnement psychologique humain pour y adapter notre environnement. Sont prises en compte les problématiques de perception, de langage, de mémoire et de raisonnement.
								</div>
								<div>
									<span class="strong">L'homogénéité</span>, est la cohérence de l'interface à travers les écrans et les interactions. On distingue l'homogénéité dans la présentation des éléments d'interface (appellation, localisation et apparence des éléments) et l'homogénéité dans le comportement de ces éléments.
								</div>
								<div>
									<span class="strong">L’ergonomie</span> des sites web, c’est-à-dire des interactions entre les utilisateurs et un site web, ne concerne pas seulement les aspects de surface ou les aspects graphiques directement visibles, elle concerne à la fois :
								</div>
								<div>
									<span class="strong">L’utilité</span>, qui est la capacité du site de répondre aux besoins "rééls" des utilisateurs (sur le web : rechercher des informations, acheter des articles en ligne, jouer, communiquer...) - caractéristiques techniques et fonctionnelles des sites (nécessité d’étudier les pré-requis utilisateurs et les tâches).
								</div>
								<div>
									<span class="strong">L'utilisabilité</span>, ou facilité d’utilisation - caractéristiques des interfaces pour tout ce qui concerne la présentation et le dialogue (nécessité d’étudier les utilisateurs en interaction avec le site web), ou la capacité d'un système à permettre à ses utilisateurs normaux de faire efficacement ce pour quoi ils l'utilisent.
								</div>
							</div>
							<div>
								<a name="ergo2"></a>
								<h3 class="border">Comment naviguent les internautes?</h3>
								<div>
									Pour designer des sites faciles à utiliser, il convient de connaître les réflexes de navigation les plus courants des internautes sur le web
								</div>
								<div>
									<span class="strong">La navigation en avant/en arrière :</span>
								</div>
								<div>
									La plupart des internautes situent leur navigation sur un site par rapport à la page ou ils se trouvent:
								</div>
								<ul>
									<li>
										où peuvent ils aller, sur la piste de l'information qu'ils recherchent ?
									</li>
									<li>
										où peuvent ils revenir en arrière ?
									</li>
								</ul>
								<div>
									En revanche, il est extrêmement rare qu'ils "passent du coq à l'âne" en cours de navigation, et dans ce cas, le plus souvent, ils repassent par la page d'accueil. Ce mode de navigation appelé "contextuel", par rapport à la navigation "structurelle" qui privilégie les menus fixes présents en permanence sur toutes les pages.
								</div>
								<div>
									<span class="strong">La navigation "vers l'avant"</span>, c'est à dire progressant vers l'information ou la fonctionalité recherchée, se fait presque exclusivement par le biais des liens situés dans les zones de contenu: soit regroupés au début ou à la fin de la page lue, soit lorsque ce contenu est constitué d'un sommaire de liens. L'internaute utilise rarement les "barres de menus" permanentes depuis les pages intérieures d'un site. L'internaute se désintéresse presque complètement des menus permanents lorsqu'ils sont latéraux au texte, et un peu moins lorsqu'ils se présentent sous la forme d'un bandeau supérieur. Il faut donc soigner les liens directement en rapport avec le contenu sur chaque page si on veut maintenir l'intérêt du spectateur pour un site.
								</div>
								<div>
									Enfin si l'utilisateur n'est plus gêné par les pages d'accueil contenant de nombreux liens, il n'en va pas de même si une page intérieure propose trop de liens sans rapport avec son contenu principal. En matière de navigation intérieure, le "plus" semble être l'ennemi du bien. En effet les liens sont l'aide essentielle de l'internaute pour atteindre l'objectif qu'il s'est fixé en visitant vos pages, et que toute proposition de digression est perçue comme du "bruit de fond", comme une perturbation parasite.
								</div>
								<div>
									Quant à la navigation en arrière, elle passe le plus souvent par l'utilisation du bouton "retour" du navigateur. Lorsque le visiteur perd la "piste" de l'information, son premier réflexe est de revenir en arrière pour voir si un lien ne lui a pas échappé. Et quand il perd trop souvent cette piste... Il va voir ailleurs.
								</div>
								<div>
									<span class="strong">Un très intéressant paradoxe: la moitié des utilisateurs se précipitent sur le moteur de recherche d'un site pou y trouver une information malgré que l'usage d'un moteur de recherche conduit à un taux de succès moyen dans les recherches d'information de seulement 30%, contre 53% par la navigation.</span>
								</div>
								<div>
									A son arrivée sur un nouveau site, c'est d'abord sur le texte que l'utilisateur se polarise. Ainsi, les liens textuels sont presque systématiquement privilégiés sur l'iconographie. Des études "eye-track"(suivant le déplacement des pupilles) récentes ont corroboré ce fait:
								</div>
								<div>
									<span class="strong">l'utilisateur a une tendance naturelle à ignorer les graphismes (surtout lorsqu'ils sont animés) et à rechercher en priorité le texte.</span> Cette tendance est également valable pour le public jeune, contrairement aux idées reçues sur les jeunes et la "civilisation de l'image". Par conséquent, privilégier une navigation textuelle améliorera l'"utilisabilité" de votre site.
								</div>
								<div>
									Les internautes utilisent plus volontiers les liens situés dans les zones de contenu que ceux situés dans les zones réservées à la navigation lorsqu'ils découvrent un site. Il n'est donc pas nécessaire de les bombarder à tout bout de champ de choix de navigation innombrables. En revanche, la certitude de retrouver à des endroits clé des éléments de navigation persistants et clairement identifiés (comme un logo en haut et à gauche) sécurise l'internaute et facilite son repérage dans le site.
								</div>
								<div>
									La composition des pages doit quant à elle permettre à l'internaute d'identifier facilement où il se trouve, et où il peut aller. Par contre, submerger l'internaute de zones comportant des choix de navigation non directement reliés au contenu de la page (navigation non "contextuelle") risque de semer la confusion dans la compréhension qu'il aura du site. La navigation contextuelle (en rapport avec l'article lu) devrait clairement être privilégiée par rapport à la navigation structurelle (des liens constants vers des grandes rubriques). Ainsi, l'internaute construit plus rapidement une représentation mentale inconsciente de l'architecture du site, ce qui facilite son usage.
								</div>
								<div>
									Dès la page d'accueil, il convient d'offrir explicitement des "pistes" permettant d'accéder en un minimum de clics à l'ensemble des contenus ou des fonctions accessibles sur un site. Là encore, le nombre, l'organisation et le libellé des liens présents sur la page d'accueil ainsi que sur les principales pages d'aiguillage d'un site seront des éléments cruciaux. de plus, il faudra éviter qu'une page ait un contenu correspondant mal au libellé du lien qui y a conduit. Il se trouve que l'internaute perçoit d'autant moins la lenteur de chargement des pages que leur contenu corresponde à ce qu'il attendait en cliquant sur le lien amont. En revanche, ce temps lui paraissait insupportable s'il perdait à un moment donné "la piste de l'information" qu'il était venu chercher.
								</div>
								<div>
									<span class="strong">L’internaute traque l’information à l’instinct.</span>
								</div>
								<div>
									Un article sur <a href="http://www.liberation.fr/" title="Libération">Libération</a> (en 2001) cite une équipe du PARC de Xerox étudiant comment l’internaute traque l’information sur le web. À l’instinct, sans réfléchir, tel un animal à l’affût de gibier pour assouvir sa faim.
								</div>
								<div>
									L’équipe s’est inspiré de la théorie de l’approvisionnement. Si un renard affamé a le choix entre un lapin dodu mais rapide et un rat maigre et fatigué, il se contente de la proie facile - effort minimum pour gratification immédiate.
								</div>
								<div>
									L’internaute est assez fainéant. Il maximise le bénéfice (la pertinence de l’information) par rapport au coût (la difficulté pour l’obtenir). Chaque recherche d’un nouvel endroit est risqué : et s’il n’y avait rien ? L’information a donc une odeur, elle laisse des traces. Les effluves les plus fortes entraînent “l’informavore” vers la “nourriture”. Tout ce qui masque les odeurs ou cache les traces brouille la piste et fait abandonner l’internaute: présentation confuse, liens non appropriés ou inutiles à l’instant présent. Les sites les plus utiles présentent des liens évoquant clairement l’information utile.
								</div>
							</div>
							<div>
								<a name="ergo3"></a>
								<h3 class="border">Graphisme</h3>
								<div>
									Un graphisme réussi sur un site web entraîne quatre impacts positifs:
								</div>
								<ul>
									<li>
										identification du site
									</li>
									<li>
										apparence professionnelle suscitant la confiance,
									</li>
									<li>
										amélioration du repérage des éléments de navigation,
									</li>
									<li>
										valeur ajoutée au contenu textuel.
									</li>
								</ul>
								<div>
									En contrepartie, certaines erreur peuvent détruire ces acquis en amenant une perturbation de la qualité de la consultation des pages. Tout est affaire d'équilibre.
								</div>
								<div>
									Le premier rôle du design visuel est de permettre une parfaite identification du site sur lequel on se trouve, et ce même si on n'y arrive pas par la page d'accueil. Par conséquent, le logo de l'émetteur du site, sa marque, son emblème, doivent être aisément repérables, en partie supérieure de la page. De plus, les choix de couleur et de composition de page devront permettre d'éviter toute confusion entre l'apparence d'un site et celui de ses concurrents directs (identification « différentielle »). En contrepartie, une galaxie de sites appartenant à un même univers (par exemple un réseau d'hôtels indépendants mais affiliés au même réseau de vente) ont tout intérêt à unifier le « look and feel » de leur site pour mettre en avant leurs avantages communs (identification par association).
								</div>
								<div>
									Dans certaines conditions, un bon design visuel peut améliorer la confiance du visiteur dans l'émetteur du site (toutes choses égales par ailleurs, cela ne suffit pas). Comment ? En prodiguant un gabarit de page constant au travers des pages et une composition rigoureuse et précise de celles ci.
								</div>
								<div>
									Ce point est essentiel: un bon design graphique doit permettre de repérer facilement les choix de navigation offerts à l'internaute, et de distinguer clairement les zones dédiées au contenu des zones "fonctionnelles":
								</div>
								<ul>
									<li>
										navigation <span class="strong">contextuelle</span> (c'est à dire en rapport avec le contenu, par exemple les « liens associés »)
									</li>
									<li>
										navigation <span class="strong">structurelle</span> (les liens qui seront invariants tout au long du site, qui servent de repère permanent à l'internaute)
									</li>
									<li>
										moteur de recherche
									</li>
									<li>
										fonctions supplémentaires liées à une page (ex: le panier d'achat, l'envoi de la page à une relation, etc... )
									</li>
								</ul>
							</div>
							<div>
								<a name="ergo4"></a>
								<h3 class="border">Charte des droits des utilisateurs</h3>
								<div>
									Pour s'imprégner tout de suite de l'ergonomie et de l'utilisabilité, voici une "Charte des droits des utilisateurs". Cette charte est une traduction libre d'un article intitulé <a href="http://www.businessweek.com/1998/39/b3597037.htm" title="A Computer User's Manifesto">"A Computer User's Manifesto"</a>, écrit par Stephen W. Wildstrom et extrait du magazine "Business Week" du 28 septembre 1998. Et malgré son "âge Internet vénérable", cette charte n'a rien perdu de sa vérité.
								</div>
								<ol>
									<li>
										L'utilisateur a toujours raison. S'il existe un problème avec l'utilisation du système, il provient du système, pas de l'utilisateur.
									</li>
									<li>
										L'utilisateur a droit à la facilité lors de l'installation de logiciels et d'équipement informatique.
									</li>
									<li>
										L'utilisateur a droit à des systèmes faisant exactement ce qu'ils sont censés faire.
									</li>
									<li>
										L'utilisateur a droit à des instructions claires, simples et précises lui permettant de comprendre et d'utiliser un système assurant l'atteinte de ses objectifs.
									</li>
									<li>
										L'utilisateur a droit au contrôle absolu du système, de même qu'à être capable d'obtenir l'attention du système sur demande.
									</li>
									<li>
										L'utilisateur a le droit d'être informé par le système sur son état par rapport à la tâche qu'il effectue et par rapport au progrès accompli vers la complétion de la tâche, de façon claire, compréhensible et précise.
									</li>
									<li>
										L'utilisateur a le droit d'être informé clairement quant aux spécifications requises pour utiliser pleinement tout système informatique.
									</li>
									<li>
										L'utilisateur a le droit de connaître les limites des capacités du système.
									</li>
									<li>
										L'utilisateur a le droit de communiquer avec les fournisseurs de technologies et de recevoir des réponses utiles et intelligentes à toutes ses questions.
									</li>
									<li>
										L'utilisateur doit être le maître de la technologie, non l'inverse. Tout système doit être intuitif et naturel lors de son utilisation.
									</li>
								</ol>
							</div>
							<div>
								<a name="ergo5"></a>
								<h3 class="border">Chasseur cueilleur</h3>
								<div>
									L'internaute est un véritable chasseur d'informations et de services. Nous devons donc viser à réaliser des sites Web qui lui permette de trouver son information ou d'effectuer son achat de produits ou de services avec un effort mental minimum et dans un laps de temps minimum.
								</div>
								<div>
									L'internaute est arrivé sur votre site parce que vous lui avez fait une promesse (mots clé et/ou résumé sur un moteur de recherche, catégorie dans un annuaire, lien dans un site spécialisé, publicité.)
								</div>
								<div>
									Dans l'énorme majorité des cas, cette promesse porte sur le contenu de votre site. La forme et l'ergonomie que vous allez lui consacrer ont pour but unique de faciliter l'accès de l'internaute à ce contenu.
								</div>
								<div>
									<span class="strong">La page d'accueil de votre site est essentielle. En moins de dix secondes, elle doit permettre à l'internaute de savoir qu'il est arrivé sur le site qu'il cherche et qu'il va y trouver ce qu'il recherche (ou pas).</span>
								</div>
								<div>
									Dés l'accueil, des liens clairs orientent l'internaute vers les parties principales de votre site. Ces liens lui permettent à la fois de visualiser rapidement ce qu'il va trouver dans le site et de se rendre directement sur les parties qui l'intéressent
								</div>
								<div>
									La page est l'élément de base de votre site Internet. Toute page, même une simple page intérieure du site visera à:
								</div>
								<ul>
									<li>
										être autonome en termes de navigation
									</li>
									<li>
										posséder ses propres liens pour remonter au sommaire précédent ou à l'accueil du site
									</li>
									<li>
										orienter facilement vers les autres pages du même niveau
									</li>
									<li>
										éviter le recours nécessaire aux boutons du navigateur
									</li>
								</ul>
								<div>
									Votre internaute est pressé, il cherche une information ou un service, il cherche à aller droit au but. En quelques secondes il aura décidé si il visite la page sur laquelle il vient d'arriver ou s'il en cherche son information ailleurs. Pour lui faciliter la recherche, donnez à votre page un titre clair qui confirme le choix qu'il a fait en cliquant sur le lien qui l'a amené à la page (Le titre utilise les mêmes termes que le lien. Ajoutez un sous-titre qui résume clairement et honnêtement le contenu de la page.
								</div>
								<div>
									La première question à se poser lors de la construction d'un projet de site Web est donc:
								</div>
								<div>
									<span class="strong">Qu'est ce que j'ai à dire, à montrer, à vendre, à enseigner qui va intéresser mon visiteur ?</span>
								</div>
								<div>
									Découpez bien votre pages en paragraphes clairement identifiés par un titre évocateur.
								</div>
								<ul>
									<li>
										être sobre et facile à lire
									</li>
									<li>
										les animations proches d'un texte long à lire sont vite fatigantes
									</li>
									<li>
										les couleurs vives sont souvent agressives pour les yeux
									</li>
									<li>
										les fonds clairs facilitent la lecture
									</li>
									<li>
										présenter un maximum d'homogénéité avec les autres pages du site
									</li>
									<li>
										l'internaute doit savoir intuitivement qu'il est toujours dans le même site
									</li>
									<li>
										éviter d'être trop longue (si possible ne pas dépasser deux à trois écrans en hauteur)
									</li>
									<li>
										présenter une information autonome.
									</li>
									<li>
										l'idéal: une page, une idée
									</li>
									<li>
										éviter de scinder l'information en plusieurs pages
									</li>
									<li>
										éviter de mettre plusieurs idées fortes dans une même page
									</li>
									<li>
										mettre un minimum de temps à s'afficher
									</li>
									<li>
										être lisible dés le début de son affichage
									</li>
									<li>
										il est essentiel que l'internaute puisse commencer à prendre contact avec la page le plus rapidement possible, aussi:
									</li>
									<li>
										utilisez des titres et sous-titres au format texte et non au format image. le texte s'affiche instantanément et votre internaute n'attend plus, il lit.
									</li>
									<li>
										si le fond de votre page est une image foncée avec un texte clair, pensez à mettre un fond foncé par défaut à votre page. l'internaute pourra lire le texte même si l'image de fond n'est pas encore chargée. 
									</li>
								</ul>
							</div>
							<div>
								<a name="ergo6"></a>
								<h3 class="border">Le côté obscure du design</h3>
								<div>
									Mal utilisé, le graphisme d'un site peut annihiler les bons côtés vus précédemment en détériorant l'expérience utilisateur:
								</div>
								<div>
									<span class="strong">La multiplication excessive des signaux ("bruit de fond visuel"):</span>
								</div>
								<div>
									Trop d'images, spécialement trop d'images animées, non directement reliées au contenu, réduisent les facultés de bien percevoir les informations utiles. Des études dans lesquelles des caméras suivaient le mouvement des yeux de l'internaute ont montré que celui ci recherche prioritairement le texte qui l'intéresse lorsqu'il arrive sur une page. Aussi si ces renseignements textuels sont noyés au milieu d'autres signaux visuels, l'internaute risque-t-il de ne pas les voir par effet de saturation.
								</div>
								<div>
									Toutefois, Il convient de préciser que l'internaute développe assez vite des réflexes de défense contre ces perturbations visuelles: la même étude a montré que celui ci ignore spontanément tout ce qui s'apparente à une bannière de publicité (même si ce n'en est pas...) dans les pages qu'il visite. Malgré tout, la présence d'images animées trop étroitement imbriquées dans le contenu constitue une réelle barrière à la visibilité des informations.
								</div>
								<div>
									Les images hors contenus doivent donc être limitées au maximum: l'identification, le look professionnel des pages et la clarification entre zones décrites précédemment doivent s'opérer avec un minimum de recours au graphisme. La sobriété est un facteur souvent déterminant de l'utilisabilité d'un site, et donc de la qualité de l'expérience vécue par l'utilisateur.
								</div>
								<div>
									<span class="strong">Les images non compréhensibles ou induisant en erreur:</span>
								</div>
								<div>
									une des principales erreurs que commettent certains concepteurs de sites web est de s'en remettre à des icônes pour suggérer une navigation vers certaines parties du site. En effet, la signification des icônes laisse une large place aux interprétations individuelles, et par conséquent, il y a un risque important que de nombreux utilisateurs n'associent pas à une image ce que son utilisateur avait prévu pour elle. Cela est particulièrement vrai lorsqu'un site essaie de remplacer des « standards de faits » de l'interface utilisateur (comme les ascenseurs dans les barres de défilement) par ses propres éléments d'interface graphique (fréquent sur les sites en flash): le fonctionnement du site devient alors difficile à comprendre pour l'internaute, ou pire, induit des erreurs d'interprétation: rien n'est pire, pour un internaute, de croire que son clic va provoquer une action, et qu'une autre se produise. De même, un visiteur n'aime pas cliquer sur un lien et se retrouver sur une page différente de celle qu'il attendait. Il s'agit donc de respecter les conventions graphiques les plus conventionelles, le plus souvent déjà propres aux "operating systems" (back, home, UP, delete, print) afin d'éviter de "repenser" les métaphores de navigation.
								</div>
								<div>
									<span class="strong">Vérifier que la logique du site (enchainement des pages, navigation...) est conforme à la logique de l’utilisateur (et non pas à la logique du concepteur)</span>
								</div>
								<div>
									<span class="strong">Le web impose deux types majeurs de contraintes:</span>
								</div>
								<ol>
									<li>
										<span class="strong">des contraintes d’affichage:</span> les informations sont présentées sur des écrans cathodiques, ce qui entraine un manque de contexte et une lisibilité réduite. De plus, lorsqu’elles sont imprimées, ces informations doivent aussi être lisibles et contextualisées ;
									</li>
									<li>
										<span class="strong">et des contraintes temporelles:</span> le manque de temps, coût du temps de connexion, débit des connexions très variable selon les modems expliquent certainement l’impatience des utilisateurs sur le web...
									</li>
								</ol>
								<div>
									Ces contraintes doivent nécessairement être prises en compte si l’on veut que le site soit utilisé.
								</div>
								<div>
									<span class="strong">Liste non exhaustive des principaux problèmes rencontrés sur le web:</span>
								</div>
								<div>
									<span class="strong">Trop d’étapes:</span> les internautes veulent arriver le plus vite possible au résultat, le nombre d’actions qu’ils doivent effectuer pour obtenir les informations qu’ils désirent doit être minimal.
								</div>
								<div>
									<span class="strong">Pas assez de guidage:</span> les internautes ne veulent pas avoir à faire des efforts supplémentaires pour comprendre ce qu’est le site, à quoi il sert, comment il fonctionne, et comment accèder au contenu, il faut que tout cela soit le plus intuitif possible.
								</div>
								<div>
									<span class="strong">Liens erronés:</span> éviter à tout prix de présenter des liens qui ne mènent à rien ou à une page différente de celle " attendue " par l’utilisateur !
								</div>
								<div>
									<span class="strong">Pages en construction:</span> si une page n’est pas encore accessible, éviter de donner la possibilité aux utilisateurs de cliquer sur le liens qui pointe sur elle, c’est une perte de temps et c’est frustrant de voir apparaître " en construction ".
								</div>
								<div>
									<span class="strong">À l'heure de l'échec d'une multitude de pointcoms et d'une certaine désillusion chez bon nombre d'utilisateurs et de clients, la facilité d'utilisation et le respect des utilisateurs sont essentiels à la réussite d'un site Web.</span>
								</div>
							</div>
							<div>
								<a name="ergo7"></a>
								<h3 class="border">Modes de lecture</h3>
								<div>
									Jean-Marc Hardy (<a href="http://www.redaction.be/" title="www.redaction.be">www.redaction.be</a>) a montré qu’il existe deux modes de “lecture”: <span class="strong">le superficiel et l’attentif</span>. Le comportement de l’internaute varie, il est à la recherche d’informations (mode recherche / superficiel), ou il a trouvé l’information et la consomme (mode consommation / attentif). Ayons en tête notre renard, en mode recherche l’internaute ne lit pas. Son œil procède par saccades. Le comportement n’est pas linéaire. Il recherche les “odeurs” qui vont l’entraîner vers la proie. Si je pulvérise une odeur de viande devant un chemin, à cet endroit je vais tromper notre Goupil une fois… mais pas deux. Certains sites web, imaginant que l’internaute est idiot, sont ainsi spécialistes de ce type de duperie.
								</div>
								<div>
									Le mode consommation fait appel à des techniques traditionnelles d’écriture. Le mode recherche exige lui de nouvelles formes d’écriture (guidage, signalisation, accroche etc.) ce que l’on appelle des microcontenus, textes courts introduisant un contenu éditorial, le macrocontenu. Ce sont les titres, les accroches et tout ce qui constitue l’habillage du contenu: sous-titres, sur-titres, légendes. L’enjeu du microcontenu est d’informer, d’inciter, d’entraîner. C’est l’odeur de la proie pour notre renard...
								</div>
								<div>
									Une navigation plus contextuelle
								</div>
								<div>
									<span class="strong">On assiste depuis un an ou deux à un passage progressif d’une navigation structurelle vers une navigation plus contextuelle.</span>
								</div>
								<div>
									On a constaté que l’internaute n’a pas de vision de l’arborescence du site (navigation structurelle). Il situe sa navigation par rapport à la page où il se trouve (navigation contextuelle). Il est rare qu’il change de stratégie de recherche en cours. Dans ce cas il repasse par la page d’accueil “D’où je viens/où je peux aller” est plus important que “Où je suis, Où puis-je aller, pour poursuivre mon but ?” À défaut, “Dois-je revenir en arrière ?”
								</div>
								<div>
									Certains spécialistes se demandent si les barres de navigation qui affichent les rubriques d’un site sont utiles, inutiles voire nuisibles. Mark Hurst (<a href="http://www.goodexperience.com/" title="www.goodexperience.com">www.goodexperience.com</a>) le pose même en principe. Il définit ainsi le Page Paradigm. Sur une page web donnée, l’alternative de l’internaute est: soit il clique sur ce qui lui semble le rapprocher de l’accomplissement de son but, soit il clique sur le bouton de retour arrière de son navigateur… Plus simplement dit, “l’internaute ne s’intéresse pas à l’endroit où il est sur le site”.
								</div>
								<div>
									Mark Hurst pousse le raisonnement encore plus loin en postulant que la cohérence n’est pas nécessaire. Cette règle d’airain du design d’interface est valable pour un logiciel mais pas sur le web où l’important est la facilité offerte à l’internaute d’avancer dans son parcours. Il introduit ainsi la notion “d’incohérence intelligente” qui permet de fournir uniquement à l’internaute ce dont il a besoin pour accomplir son but plutôt que d’ajouter des éléments de navigation inutiles simplement parce c’est cohérent avec le reste du site. Ce raisonnement qui semble un peu à l’emporte-pièce semble conforté par les études et les tests.
								</div>
								<ol>
									<li>
										80% de la navigation vers l’avant est guidée par les éléments contextuels liés au contenu de la page en cours.
									</li>
									<li>
										L’internaute utilise rarement la barre de navigation dans les pages intérieures d’un site.
									</li>
									<li>
										La navigation arrière passe généralement par le bouton “retour” du navigateur.
									</li>
									<li>
										La majorité des informations de la barre de navigation sont inutiles. L’internaute, désirant modifier sa recherche, repasse par la page d’accueil.
									</li>
								</ol>
								<div>
									En conséquence:
								</div>
								<ol>
									<li>
										On constate que la barre de navigation a tendance à s’effacer de plus en plus sur les sites.
									</li>
									<li>
										Il faut soigner les liens directement en rapport avec le contenu sur chaque page.
									</li>
									<li>
										Dans tous les cas, le chemin de progression se révèle supérieur à la barre de navigation.
									</li>
								</ol>
								<div>
									<span class="strong">Déplacer l’arborescence de navigation vers une approche utilisateur.</span>
								</div>
								<div>
									Cela signifie-t-il qu’il faut bannir la barre de navigation ? Certainement pas, mais cette dernière ne doit pas être l’ossature central de “l’offre” du site mais plutôt une option pour simplifier le parcours. Ainsi sur un site marchand, elle permet d’avoir sous les yeux les différents rayons de la boutique pour s’y mouvoir plus rapidement. Une barre de navigation reprenant les sections d’un site les plus fréquentées permet à l’internaute habitué du site de bénéficier de raccourcis appréciés.
								</div>
								<div>
									Il est temps de changer d’approche, déplacer la facilité de la vision développeur de l’arborescence d’un site et réellement placer l’utilisateur au centre du processus. L’approche développeur est commode à percevoir puisqu’elle correspond à la structure technique du site. Elle consiste à dire à l’internaute: “voilà ce que je propose”. L’approche utilisateur est moins facile à appréhender. Elle repose sur une analyse des objectifs et des buts de l’internaute pour lui dire “Qui es-tu et que désire-tu faire ?”.
								</div>
							</div>
							<div>
								<a name="ergo8"></a>
								<h3 class="border">Caractéristiques humaines</h3>
								<div>
									Les études psychologiques menées sur l'Homme ont montré certaines aptitudes ainsi qu'un certain nombre de limites. L'objet de l'ergonomie est de tirer profit de ces éléments psychologiques afin de mettre en oeuvre une interface efficace et confortable à utiliser.
								</div>
								<div>
									L'être humain, selon le modèle du "processeur humain", perçoit son environnement à l'aide de son système sensoriel (5 sens: toucher, vue, ouïe, odorat, goût), mémorise et planifie des actions à l'aide de son système cognitif (cerveau) et enfin agit grâce à son système moteur et grâce au langage.
								</div>
								<div>
									Parmi les 5 sens, la vue est le sens le plus développé, alors que le goût et l'odorat sont réputés pour être peu développés. Ainsi, dans la mesure où l'on considère que la perception visuelle peut représenter près de 50% de l'activité du cerveau, il s'agit du mode privilégié pour les interfaces utilisateurs.
								</div>
								<div>
									A chacun des systèmes correspond une mémoire et un processeur. Les théories de psychologie distinguent trois types de mémoires:
								</div>
								<ol>
									<li>
										<span class="strong">La mémoire sensorielle</span>, permettant de stocker l'information sensorielle (traitement des stimuli) pendant une durée de l'ordre du quart de seconde (250 ms),
									</li>
									<li>
										<span class="strong">La mémoire à court terme</span> (ou mémoire de travail), capable de stocker un nombre restreint de mnèmes (en anglais « chunks » soit « unités d'information », c'est-à-dire des motifs visuels ou sonores telle qu'un mot, etc.) pendant plusieurs minutes. Des études, mises en évidence par Georges MILLER en 1956 (Magical number seven), ont montré qu'un être humain est capable de traiter simultanément 7 mnèmes (plus ou moins deux).
									</li>
									<li>
										<span class="strong">La mémoire à long terme</span>, capable de stocker un nombre infini d'informations de manière permanente.
									</li>
								</ol>
								<div>
									Les trois types de mémoire sont fortement liés. Ainsi, un environnement faisant fortement intervenir les sens (musique, vidéo, endroit agréable) facilite l'apprentissage à court terme. C'est notamment pour cette raison que l'apprentissage par l'action est très efficace. Les environnements multimédias permettent par exemple aux enfants de s'approprier très rapidement l'interface et d'apprendre « sans s'en rendre compte ».
								</div>
								<div>
									Par ailleurs, la répétition est un moyen de faire passer l'information de la mémoire à court terme vers la mémoire à long terme. Le processus de mémorisation à long terme se fait sur un principe d'association: la récupération d'un mnème dans la mémoire à long terme sera d'autant plus facile qu'il sera rattaché conceptuellement à d'autres mnèmes.
								</div>
							</div>
							<div>
								<a name="ergo9"></a>
								<h3 class="border">La symbolique</h3>
								<div>
									Choisissez sur Internet ou dans votre environnement quotidien des publications très différentes, certaines ludiques d'autres institutionnelles ou commerciales et surfer ou feuilletez-les. Regardez les formes symboliques dominantes qui s'y attachent. Vous en verrez partout: dans le choix de mise en page, dans les lettrines et les pictogrammes, dans les logos et, bien sûr, surtout dans la publicité. (bandeaux, bannières,...) La ligne, la simple ligne n'est pas innocente. Elle parle à son lecteur.
								</div>
								<div>
									<span class="strong">La verticale</span> évoque la force, la dignité, la vérité. Elle s'apparente aussi à la rigidité, à l'immobilisme.
								</div>
								<div>
									<span class="strong">L'horizontale</span> est synonyme de calme, de repos, de tranquillité, d'horizons largement ouverts. Mais aussi, tel un gisant, de mort.
								</div>
								<div>
									<span class="strong">L'oblique</span> symbolise le mouvement, le dynamisme. Mal utilisée, elle se transforme en chute.
								</div>
								<div>
									<span class="strong">La droite</span> est la figure la plus simple, la plus directe. Rigueur, décision, mais aussi ennui.
								</div>
								<div>
									<span class="strong">La courbe</span> s'apparente à la plénitude, à la féminité. Mais elle évoque également la mollesse.
								</div>
								<div>
									<span class="strong">La ligne brisée</span> est souvent signe d'agitation, de confusion.
								</div>
								<div>
									<span class="strong">Les lignes convergentes, divergentes</span> sont ambiguës. Elles signifient à la fois: choc, violence mais aussi expansion, éloignement.
								</div>
								<div>
									Ce qui est vrai pour les lignes l'est plus encore pour les <span class="strong">figures géométriques</span> qui ont une très forte valeur symbolique. Si les entreprises dépensent des millions de francs pour créer un logo, c'est qu'elles ont compris la charge émotionnelle qu'il recèle.
								</div>
								<div>
									<span class="strong">Le cercle</span> est synonyme de perfection, d'absolu, d'infini.
								</div>
								<div>
									<span class="strong">Le triangle</span> représente l'harmonie, la proportion, la sécurité.
								</div>
								<div>
									<span class="strong">Le carré</span> est solide, stable. Il symbolise l'absence rassurante de tension. C'est le support idéal pour une information neutre et objective.
								</div>
								<div>
									<span class="strong">Le rectangle</span> s'apparente au carré. Présenté à la française, c'est-à-dire à la verticale, il est plus dynamique. A l'italienne, c'est-à-dire à l'horizontale, il produit un effet panoramique.
								</div>
								<div>
									<span class="strong">Le losange</span> signifie la vie, le passage, l'échange.
								</div>
								<div>
									<span class="strong">La flèche</span> évoque le mouvement.
								</div>
							</div>
							<div>
								<a name="ergo10"></a>
								<h3 class="border">Les couleurs</h3>
								<div>
									Il est conseillé de ne pas utiliser plus de trois couleurs différentes dans un site web afin de respecter le critère de sobriété. Le choix des couleurs devra correspondre, le cas échéant, aux couleurs de l'organisation (notamment aux couleurs du logo) et exprimer une ambiance particulière.
								</div>
								<div>
									Quel que soit le choix des couleurs, il est recommandé d'établir une couleur prédominante, représentant la majeure partie de la page web, et une ou plusieurs couleurs secondaires plus dynamiques (plus vives), en moindres proportions , afin de mettre des éléments en exergue.
								</div>
								<div>
									Un outil très utile pour choisir des harmonies de couleurs: <a href="http://www.colormixers.com/mixers/cmr/" title="COLORMIXERS">COLORMIXERS</a>
								</div>
								<div>
									<table class="contenttable">
										<thead>
											<tr>
												<th>
													Couleur 
												</th>
												<th>
													Symbolique méliorative 
												</th>
												<th>
													Symbolique péjorative 
												</th>
												<th>
													Domaine 
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="background-color: rgb(51, 102, 255); color: rgb(102, 255, 255); text-align: center; font-weight: bold;">
													Bleu 
												</td>
												<td>
													Calme, confiance, autorisation, apaisement, sérénité, protection, sérieux, mystique, bonté, eau, espace, paix 
												</td>
												<td>
													Froid, sommeil 
												</td>
												<td>
													Voile, nouvelles technologies, informatique, médecine 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(153, 51, 153); color: rgb(255, 102, 255); text-align: center; font-weight: bold;">
													Violet 
												</td>
												<td>
													Délicatesse, passion, discrétion, modestie, religion. 
												</td>
												<td>
													Mélancolie, tristesse, deuil, insatisfaction 
												</td>
												<td>
													Culture, politique 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(255, 153, 204); color: rgb(204, 0, 51); text-align: center; font-weight: bold;">
													Rose 
												</td>
												<td>
													Charme, intimité, femme, beauté 
												</td>
												<td>
													Naïveté 
												</td>
												<td>
													Journal personnel, femmes 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(255, 0, 0); color: rgb(255, 204, 0); text-align: center; font-weight: bold;">
													Rouge 
												</td>
												<td>
													Chaleur, force, courage, dynamisme, triomphe, amour, enthousiasme. 
												</td>
												<td>
													Violence, colère, danger, urgence, interdit, sang, enfer. 
												</td>
												<td>
													Luxe, mode, sport, marketing, médias 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(255, 153, 0); color: rgb(255, 255, 0); text-align: center; font-weight: bold;">
													Orange 
												</td>
												<td>
													Tiédeur, confort, gloire, bonheur, richesse, honneur, plaisir, fruit, odeur, tonus, vitalité. 
												</td>
												<td>
													Feu, alerte 
												</td>
												<td>
													Divertissement, sport, voyage 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(255, 255, 0); color: rgb(204, 0, 0); text-align: center; font-weight: bold;">
													Jaune 
												</td>
												<td>
													Lumière, gaieté, soleil, vie, pouvoir, dignité, or, richesse, immortalité. 
												</td>
												<td>
													Tromperie, égoïsme, jalousie, orgueil, alerte 
												</td>
												<td>
													Tourisme 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(51, 204, 102); color: rgb(255, 255, 0); text-align: center; font-weight: bold;">
													Vert 
												</td>
												<td>
													Nature, vie végétale, secours, équilibre, foi, apaisement, repos, confiance, tolérance, espoir, orgueil, jeunesse, charité. 
												</td>
												<td>
													&nbsp; 
												</td>
												<td>
													Découverte, nature, voyage, éducation 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(153, 51, 51); color: rgb(204, 153, 0); text-align: center; font-weight: bold;">
													Brun 
												</td>
												<td>
													Calme, philosophie, terroir. 
												</td>
												<td>
													Saleté 
												</td>
												<td>
													Environnement 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(255, 255, 255); color: inherit; text-align: center; font-weight: bold;">
													Blanc 
												</td>
												<td>
													Pureté, innocence, neige, propreté, fraîcheur, richesse. 
												</td>
												<td>
													&nbsp; 
												</td>
												<td>
													Mode, actualités 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(153, 153, 153); color: rgb(0, 0, 0); text-align: center; font-weight: bold;">
													Gris 
												</td>
												<td>
													Neutralité, respect. 
												</td>
												<td>
													&nbsp; 
												</td>
												<td>
													Design, associations, organisations à but non lucratif 
												</td>
											</tr>
											<tr>
												<td style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); text-align: center; font-weight: bold;">
													Noir 
												</td>
												<td>
													Sobriété, luxe, nuit. 
												</td>
												<td>
													Mort, obscurité, tristesse, monotonie. 
												</td>
												<td>
													Cinéma, art, photographie et interdit 
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div>
									Les couleurs possèdent une symbolique implicite. Il est donc important de les choisir en connaissance de cause. En effet, les couleurs influent sur le comportement des individus:
								</div>
								<ul>
									<li>
										physiquement: appétit, sommeil, température du corps, etc.
									</li>
									<li>
										émotionnellement: sentiment de peur, de sécurité, de joie, etc.
									</li>
									<li>
										psychologiquement: dynamisme, concentration, etc.
									</li>
								</ul>
							</div>
							<div>
								<a name="ergo11"></a>
								<h3 class="border">Liens et références</h3>
								<ul>
									<li>
										<a href="http://www.commentcamarche.net/web/webintro.php3" title="Webmastering - Introduction à la création de pages web">Webmastering - Introduction à la création de pages web</a>
									</li>
									<li>
										<a href="http://www.ergolab.net/" title="Ergolab.net">Ergolab.net</a>
									</li>
									<li>
										<a href="http://www.abc-netmarketing.com/rubrique.php3?id_rubrique=287" title="Les principes, concepts et outils de l’ergonomie web">Les principes, concepts et outils de l’ergonomie web</a>
									</li>
									<li>
										<a href="http://www.k10k.net/" title="A list appart (ENG)">A list appart (ENG)</a>
									</li>
									<li>
										<a href="http://jimmac.musichall.cz/" title="Musichall">Musichall</a>
									</li>
									<li>
										<a href="http://www.favouritewebsiteawards.com/" title="Favourite Website Awards (FWA)">Favourite Website Awards (FWA)</a>
									</li>
									<li>
										<a href="http://www.useit.com/" title="useit.com: Jakob Nielsen on Usability and Web Design">useit.com: Jakob Nielsen on Usability and Web Design</a>
									</li>
									<li>
										<a href="http://www.k10k.net/" title="K10k the designer's lunchbox">K10k the designer's lunchbox</a>
									</li>
									<li>
										<a href="http://www.pixeline.be/links/goodbye.php?action=gotourl&amp;link_ID=7" title="THREE.OH - Digital Design Journal">THREE.OH - Digital Design Journal</a>
									</li>
									<li>
										<a href="http://www.bd4d.com/" title="BD4D® Show, Share, Unite!">BD4D® Show, Share, Unite!</a>
									</li>
									<li>
										<a href="http://www.pixelsurgeon.com/" title="PIXELSURGEON">PIXELSURGEON</a>
									</li>
									<li>
										<a href="http://www.netdiver.net/" title="Netdiver">Netdiver</a>
									</li>
								</ul>
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
