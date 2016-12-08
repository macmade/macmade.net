<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>T3FRUniversity 2005 - Boîte à outils - Extensions</h1>
							<h2>RealURL</h2>
							<div>
								RealURL est une extension qui permet d'obtenir des adresses de pages comme les sites «normaux», c'est à dire statiques.
							</div>
							<div>
								Sur Typo3, les URLs sont par défaut écrits de la manière suivante:
							</div>
							<div class="italic">
								<span class="strong">/index.php?id=192&type=0&L=0</span>
							</div>
							<div>
								Ceci n'est pas vraiment une adresse facile à retenir, ni pratique... Avec RealURL, on pourra par exemple obtenir ceci:
							</div>
							<div class="italic">
								<span class="strong">/fr/typo3/universite-dete-2005/boite-a-outils-typoscript/index.html</span>
							</div>
							<div>
								Outre le fait qu'il s'agit d'une adresse plus facile à retenir pour vos visiteurs, un tel URL a également d'énormes avantages en matière de référencement sur des moteurs de recherche comme Google, par exemple.
							</div>
							<div>
								La documentation de cette extension peut-être obtenue à l'adresse suivante:<br />
								<a href="http://typo3.org/documentation/document-library/extension-manuals/realurl/current/view/" title="RealURL">typo3.org/documentation/document-library/extension-manuals/realurl/current/view/</a>
							</div>
							<h3 class="border">Configuration serveur</h3>
							<div>
								Avant de pouvoir utiliser RealURL, le serveur web a besoin d'être configuré.
							</div>
							<div>
								En premier lieu, il faut activer le module d'<span class="strong">«URL rewriting»</span> (réécriture d'URL) d'Apache.
							</div>
							<div>
								Ensuite, il faut placer un fichier <span class="strong">.htaccess</span> à la racine web du serveur:
							</div>
							<div class="code">
#
# URL rewriting
#
RewriteEngine On
RewriteRule ^typo3$ - [L]
RewriteRule ^typo3/.*$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule .* index.php
							</div>
							<h3 class="border">Configuration TypoScript</h3>
							<div>
								Il faut ensuite activer l'extension dans le gabarit TypoScript du site:
							</div>
							<div class="code">
/**
* Config object
*/
config {
	// Disable static document simulation
	simulateStaticDocuments = 0
	
	// Prefix anchors
	prefixLocalAnchors = all
	
	// Base tag
	baseURL = 1
	
	// Enable RealURL
	tx_realurl_enable = 1
}
							</div>
							<h3 class="border">Configuration PHP</h3>
							<div>
								La façon dont les URLs seront modifiés doit se configurer dans le fichier <span class="strong">typo3conf/localconf.php</span>. Afin de garder un code propre, nous allons créer un fichier <span class="strong">typo3conf/conf_realurl.php</span> et l'inclure dans localconf.php de la manière suivante:
							</div>
							<div class="code">
// Include RealURL configuration
require_once('conf_realurl.php');
							</div>
							<div>
								Voici maintenant un exemple de configuration:
							</div>
							<div class="code">
&lt;?php
/**
* RealURL configuration
*/
$TYPO3_CONF_VARS['EXTCONF']['realurl'] = array(
	
	// Default host
	'_DEFAULT' => array(
	
		// General configuration
		'init' => array(
			'doNotRawUrlEncodeParameterNames' => 0,
			'enableCHashCache' => 1,
			'respectSimulateStaticURLs' => 1,
			'appendMIssingSlash' => 1,
			'adminJumpToBackend' => 0,
			'enableUrlDecodeCache' => 1,
			'enableUrlEncodeCache' => 1,
		),
		
		// Redirections
		'redirects' => array(),
		
		// Pre variables
		'preVars' => array(
			
			// No cache
			array(
				'GETvar' => 'no_cache',
				'valueMap' => array(
					'no_cache' => 1,
				),
				'noMatch' => 'bypass',
			),
			
			// Language
			array(
				'GETvar' => 'L',
				'valueMap' => array(
					'fr' => '0',
				),
				'valueDefault' => 'fr',
			),
		),
		
		// Transformation method
		'pagePath' => array(
			'type' => 'user',
			'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
			'spaceCharacter' => '-',
			'languageGetVar' => 'L',
			'expireDays' => 3,
		),
		
		// Fixed post variables
		'fixedPostVars' => array(),
		
		// Post variables
		'postVarsSets' => array(
			'_DEFAULT' => array(),
		),
		
		// File names
		'fileName' => array(
			'index' => array(
				'index.html' => array(
					'keyValues' => array(),
				),
			),
		),
	),
);
?&gt;
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
