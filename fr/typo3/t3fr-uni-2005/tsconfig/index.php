<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>T3FRUniversity 2005 - Boîte à outils - TSConfig</h1>
							<h2>Documentation</h2>
							<div>
								La référence complète du TSConfig peut être obtenue à l'adresse suivante:<br />
								<a href="http://typo3.org/documentation/document-library/references/doc_core_tsconfig/current/" title="TSConfig">typo3.org/documentation/document-library/references/doc_core_tsconfig/current/</a>
							</div>
							<h2>TSConfig: Crayon d'édition (FE)</h2>
							<div>
								Afin d'afficher le crayon, vous permettant d'étiter le contenu de vos pages directement depuis le Frontend, insérez le code suivant dans le TSConfig du groupe auquel vous appartenez:
							</div>
							<div class="code">
/**
* Admin panel configuration
*/
admPanel {
	
	// Hide
	hide = 1
	
	// Force edit icons
	module.edit.forceDisplayFieldIcons = 1
	
	// Enable edit
	enable.edit = 1
}
							</div>
							<h2>TSConfig: Rich Text Editor (HTMLArea)</h2>
							<div>
								Un exemple de configuration du RTE (Rich Text Editor) basé sur HTMLArea. Ce code est à insérer dans l'entête d'une page (généralement la première), dans le champ «Page TSConfig»:
							</div>
							<div class="code">
/**
* Page TS Config - Rich Text Editor Setup
*
* @author        Jean-David Gadina (info@macmade.net)
* @version       1.0
*/
RTE {

	// Stylesheet
	default.contentCSS = fileadmin/css/rte.css
	
	// Buttons not available
	default.hideButtons = fontstyle
	
	// Disable color picker
	default.disableColorPicker = 0
	
	/**
	* Colors definition
	*/
	colors {
	
		color1.name = Code - Comment
		color1.value = #FF7F00
		
		color2.name = Code - Keyword
		color2.value = #007500
		
		color3.name = Code - Text
		color3.value = #0000B7
		
		color4.name = Code - String
		color4.value = #DB0000
	}
	
	// Colors available
	default.colors = color1, color2, color3, color4
	
	/**
	* Default RTE proc rules
	*/
	default.proc {
		
		// Set transformation method
		overruleMode = ts_css
		
		// Don't convert &lt;br&gt; tags
		dontConvBRtoParagraph = 1
		
		// Split content into &lt;font&gt; tag chunks
		internalizeFontTags = 1
		
		// Tags allowed outside &lt;p&gt; and &lt;div&gt; tags
		allowTagsOutside = img, hr, table, tr, th, td, h1, h2, h3, h4, h5, h6, br, ul, ol, li, pre
		
		// Tags allowed in Typolists
		allowTagsInTypolists = br, font, b, i, u, a, img, span
		
		// Tags allowed
		allowTags = table, tr, th, td, h1, h2, h3, h4, h5, h6, div, p, br, span, ul, ol, li, pre, blockquote, strong, em, b, i, u, sub, sup, strike, a, img, nobr, hr, center
		
		// Tags denied (unset value)
		denyTags >
		
		// Allowed classes (disabled)
		//allowedClasses =
		
		// Allowed attributes for &lt;p&gt; and &lt;div&gt; tags
		keepPDIVattribs = align, class, style
		
		// Keep unknown tags
		dontRemoveUnknownTags_db = 1
		
		// Allow tables
		preserveTables = 1
		
		/**
		* HTML parser -> Direction to RTE
		*/
		HTMLparser_rte {
			
			// Tags allowed
			allowTags = table, tr, th, td, h1, h2, h3, h4, h5, h6, div, p, br, span, ul, ol, li, pre, blockquote, strong, em, b, i, u, sub, sup, strike, a, img, nobr, hr, center
			
			// Don't remove non-matched tags
			keepNonMatchedTags = 1
			
			// Don't clean content with XHTML rules
			xhtml_cleaning = 0
			
			// Attrubutes allowed for &lt;span&gt; tag
			tags.span.allowedAttribs = style
		}
		
		/**
		* HTML parser -> Direction to database
		*/
		HTMLparser_db {
			
			// Tags allowed
			allowTags = table, tr, th, td, h1, h2, h3, h4, h5, h6, div, p, br, span, ul, ol, li, pre, blockquote, strong, em, b, i, u, sub, sup, strike, a, img, nobr, hr, center
			
			// Don't remove non-matched tags
			keepNonMatchedTags = 1
			
			// Don't clean content with XHTML rules
			xhtml_cleaning = 0
			
			// Attrubutes allowed for &lt;span&gt; tag
			tags.span.allowedAttribs = style
		}
	}
}
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
