<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Localisation avec Templavoila</h1>
							<div>
								Ce tutoriel a pour but de vous aider à mettre en place un site multilangue avec le moteur de gabarit Templavoila.
							</div>
							<h2>1) Extensions</h2>
							<div>
								Avant de commencer, certaines extensions doivent être installées sur votre instance TYPO3. Il s'agit de:
							</div>
							<ul>
								<li>
									<span class="strong">Templavoila</span><br />
									<a href="http://typo3.org/extensions/repository/view/templavoila/1.1.0/" title="Templavoila">typo3.org/extensions/repository/view/templavoila/1.1.0/</a>
								</li>
								<li>
									<span class="strong">Static Info Tables</span><br />
									<a href="http://typo3.org/extensions/repository/view/static_info_tables/2.0.0/" title="Static Info Tables">typo3.org/extensions/repository/view/static_info_tables/2.0.0/</a>
								</li>
								<li>
									<span class="strong">Static Info Tables (FR)</span><br />
									<a href="http://typo3.org/extensions/repository/view/static_info_tables_fr/2.0.0/" title="Static Info Tables (FR)">typo3.org/extensions/repository/view/static_info_tables_fr/2.0.0/</a>
								</li>
								<li>
									<span class="strong">Static Info Library</span><br />
									<a href="http://typo3.org/extensions/repository/view/sr_static_info/2.0.0/" title="Static Info Library">typo3.org/extensions/repository/view/sr_static_info/2.0.0/</a>
								</li>
							</ul>
							<h2>2) Langues disponibles</h2>
							<div>
								Il faut ensuite créer les langues qui seront disponibles sur le site. Cela se fait en créant un nouvel élément de type «Language de site» dans le conteneur de site TYPO3 (root).
							</div>
							<div>
								<img src="/uploads/images/tutorials/l10n/l10n-1.png" alt="Localisation - 1" width="455" height="362" />
							</div>
							<h2>3) Traductions</h2>
							<div>
								A partir de ce moment là, chaque page peut être traduite depuis le module page de Templavoila (onglet «Translations»).
							</div>
							<div>
								<img src="/uploads/images/tutorials/l10n/l10n-2.png" alt="" width="421" height="118" />
							</div>
							<h2>4) Contenu</h2>
							<div>
								Ensuite, on peut passer d'une langue à l'autre, et y insérer du contenu spécifique.
							</div>
							<div>
								<img src="/uploads/images/tutorials/l10n/l10n-3.png" alt="" width="412" height="100" />
							</div>
							<h2>5) Paradigmes</h2>
							<div>
								Il existe plusieur modes (paradigmes) de localisation avec TemplaVoila. Le mode que je recommende, qui n'est pas celui utilisé par défaut, est «free». Celui-ci permet de traduire des éléments de contenus dans d'autres langues directement depuis la langue par défaut (voir image), tout en permettant d'avoir du contenu spécifique à chaque langue. On obtient ainsi une souplesse totale (soit du contenu spécifique, soit du contenu traduit, lié aux éléments de la langue par défaut).
							</div>
							<div>
								<img src="/uploads/images/tutorials/l10n/l10n-4.png" alt="" width="451" height="90" />
							</div>
							<div>
								Pour activer ce paradigme, placer le code suivant dans le champ TSConfig de la première page du site:
							</div>
							<div class="code">
mod.web_txtemplavoilaM1.translationParadigm = free
							</div>
							<h2>6) Frontend</h2>
							<div>
								Pour que la frontend reconnaisse les différentes langues, il faut non seulement indiquer dans le template TS principal la langue par défaut, mais aussi les autres langues, ceci en utilisant des conditions TypoScript. Exemple avec comme langue par défaut l'anglais, et comme autres langues le français et l'anglais:
							</div>
							<div class="code">
// Default language
config.sys_language_uid = 0
config.language = en
config.locale_all = en_US
config.htmlTag_langKey = en
config.linkVars = L

// English language
[globalVar = GP:L = 0]
	config.sys_language_uid = 0
	config.language = en
	config.locale_all = en_US
	config.htmlTag_langKey = en
[GLOBAL]

// French language
[globalVar = GP:L = 1]
	config.sys_language_uid = 1
	config.language = fr
	config.locale_all = fr_FR
	config.htmlTag_langKey = fr
[GLOBAL]

// German language
[globalVar = GP:L = 2]
	config.sys_language_uid = 2
	config.language = de
	config.locale_all = de_DE
	config.htmlTag_langKey = de
[GLOBAL]
							</div>
							<h2>7) Drapeaux</h2>
							<div>
								Pour donner un nom et un drapeau à la langue par défaut, placer le code suivant dans le champ TSConfig de la première page du site:
							</div>
							<div class="code">
mod.SHARED.defaultLanguageFlag = gb.gif
mod.SHARED.defaultLanguageLabel = English
							</div>
							<h2>8) Menus</h2>
							<div>
								Pour créer un menu permettant de changer de langue en FE, placer ce genre de code dans le template TypoScript principal, et le lier à un élément d'une structure TemplaVoila (DS):
							</div>
							<div class="code">
lib.menus.lang = HMENU
lib.menus.lang.special = language
lib.menus.lang.special.value = 0,1,2
lib.menus.lang.1 = TMENU
lib.menus.lang.1 {
	
	// Wrap
	wrap = &lt;ul&gt; | &lt;/ul&gt;
	
	// Normal state
	NO.linkWrap = &lt;li&gt;|&lt;/li&gt;
	NO.stdWrap.override = EN || FR || DE
	
	// Active state
	ACT = 1
	ACT.linkWrap = &lt;li class="act"&gt;|&lt;/li&gt;
	ACT.stdWrap.override = EN || FR || DE
	
	// User defined
	USERDEF1 = 1
	USERDEF1.doNotLinkIt = 1
	USERDEF1.linkWrap = &lt;li class="disabled"&gt;|&lt;/li&gt;
	USERDEF1.stdWrap.override = EN || FR || DE
}
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
