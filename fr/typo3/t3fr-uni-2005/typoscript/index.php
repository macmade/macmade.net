<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>T3FRUniversity 2005 - Boîte à outils - TypoScript</h1>
							<h2>Documentation</h2>
							<div>
								La référence complète du TypoScript peut être obtenue à l'adresse suivante:<br />
								<a href="http://typo3.org/documentation/document-library/references/doc_core_tsref/current/" title="TSRef">typo3.org/documentation/document-library/references/doc_core_tsref/current/</a>
							</div>
							<div>
								Cette documentation s'adresse aux personnes possédant déjà une certaine expérience en TypoScript. Peut les débutants, un tutoriel est également disponible (TypoScript By Example):
							</div>
							<ul>
								<li>
									Version officelle (en anglais):<br />
									<a href="http://typo3.org/documentation/document-library/core-documentation/doc_core_tsbyex/current/" title="TypoScript By Example">typo3.org/documentation/document-library/core-documentation/doc_core_tsbyex/current/</a>
								</li>
								<li>
									Traduction française:<br />
									<a href="http://typo3.org/documentation/document-library/tutorials/doc_core_tsbyex_fr/current/" title="TypoScript By Example (Français)">typo3.org/documentation/document-library/tutorials/doc_core_tsbyex_fr/current/</a>
								</li>
							</ul>
							<h2>TypoScript: OptionSplit</h2>
							<div>
								L'OptionSplit est une fonction TypoScript extrêmement puissante et pratique. Elle nécessite par contre un peu de pratique pour être utilisée de manière correcte.
							</div>
							<div>
								Cette fonction, utilisée notemment dans la construction de menus dynamiques, sert à attribuer des valeurs différentes pour un groupe d'objet, en fonction de leurs positions.
							</div>
							<div>
								Les valeurs sont séparées en utilisant deux types de marqueurs spécifiques:
							</div>
							<div>
								<span class="strong">|*|</span><br />
								Ce marqueur est utilisé pour séparer les valeurs en 3 groupes (premier, milieu, et dernier). Il est donc impossible d'en utiliser plus que deux.
							</div>
							<div>
								<span class="strong">||</span><br />
								Ce marqueur sert à séparer chaque groupe de valeurs séparées préalablement par le premier marqueur en un nombre N de valeurs.
							</div>
							<div>
								<span class="strong">Exemple:</span><br />
								premier_1 || premier_2 |*| milieu |*| dernier_1 || dernier_2 || dernier_3
							</div>
							<div>
								<span class="strong">Règles:</span><br />
								Il existe 4 règles qui régissent le concept de l'OptionSplit:
							</div>
							<ol>
								<li>
									La priorité des marqueurs est la suivante: dernier, premier, milieu.
								</li>
								<li>
									Si la valeur du milieu est vide, c'est la dernière partie du premier groupe de valeurs qui sera utilisée à la place.
								</li>
								<li>
									Si la valeur du début ou du milieu est vide, c'est la première partie du dernier groupe qui sera utilisée pour ces valeurs.
								</li>
								<li>
									La valeur du milieu se répète au besoin, en reprenant à chaque fois depuis le début de son sous-groupe.
								</li>
							</ol>
							<h2>TypoScript: RootLine</h2>
							<div>
								Voici le code TypoScript nécessaire à la création d'un chemin d'accès vers la page courante, appelé <span class="strong">rootline</span>.
							</div>
							<div>
								Notez l'utilisation de l'<span class="strong">OptionSplit</span> dans la configuration de ce type de menu.
							</div>
							<div class="code">
/**
* Rootline
*/
lib.menus.rootline = HMENU
lib.menus.rootline {
	
	// Rootline type
	special = rootline
	
	// Text menu
	1 = TMENU
	1 {
		// Wrap
		wrap = &lt;div class="menu_rootline"&lt;Vous êtes ici: /&nbsp; |&lt;/div&gt;
		
		// Normal state
		NO.linkWrap = | /&amp;nbsp; |*||*| |
	}
}
							</div>
							<h2>TypoScript: Multi-langue</h2>
							<div>
								Dans le cas d'un site Typo3 multi-langue, il est nécessaire de configurer chaque langue dans un template TypoScript.
							</div>
							<div>
								En premier lieu, il faut définir la langue par défaut du site:
							</div>
							<div class="code">
/**
* Config object
*/
config {

	// Default language settings
	sys_language_uid = 0
	language = fr
	locale_all = fr_FR
	linkVars = L
}
							</div>
							<div>
								Tout d'abord, nous définissons quelle langue de site (créée préalablement dans l'interface d'administration). En l'occurence, 0 puisqu'il s'agit de la langue par défaut.
							</div>
							<div>
								Le deuxième paramètre indique le code de la langu, tandis que le troisième sert à configurer les locales (utilisées par exemple pour l'affichage des dates au format long).
							</div>
							<div>
								Le quatrième paramètre, quant à lui, indique au système quelle variable sera utilisée pour changer de langue.
							</div>
							<div>
								Ensuite, chaque langue peut être configurée séparément dans des conditions TypoScript. Notez que ces conditions ne peuvent se trouver qu'au premier niveau du code TypoScript, c'est à dire pas à l'intérieur d'un autre objet:
							</div>
							<div class="code">
// French language
[globalVar = GP:L = 0]
	config.sys_language_uid = 0
	config.language = fr
	config.locale_all = fr_FR
[GLOBAL]

// English language
[globalVar = GP:L = 1]
	config.sys_language_uid = 1
	config.language = en
	config.locale_all = en_EN
[GLOBAL]
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
