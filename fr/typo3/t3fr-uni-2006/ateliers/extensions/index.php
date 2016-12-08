<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<div>
								<img src="/uploads/images/t3fr-uni-2006-banner.gif" alt="T3FRUniversity 2006" width="700" height="250" /><br />
							</div>
							<h1>T3FRUniversity 2006 - Atelier extensions</h1>
							<h2>RTE HTMLArea</h2>
							<div>
								Voici un exemple de configuration pour l'extension <a href="http://typo3.org/extensions/repository/view/rtehtmlarea/1.4.2/" title="RTE HTMLArea">RTE HTMLArea</a>.
							</div>
							<div>
								Le code ci-dessous doit se placer dans le champ «TSConfig» d'une page, généralement la première. Pour qu'il fonctionne correctement, l'extension doit également être paramétrée de la manière suivante:
							</div>
							<div>
								<span class="strong">List of htmlArea RTE plugins:</span><br />
								TableOperations, SpellChecker, ContextMenu, SelectColor, TYPO3Browsers, InsertSmiley, FindReplace, RemoveFormat, CharacterMap, QuickTag, InlineCSS, DynamicCSS, UserElements, Acronym, TYPO3HtmlParser
							</div>
							<div>
								<span class="strong">Default configuration settings:</span><br />
								Minimal (Most features disabled. Administrator needs to enable them using TypoScript. For advanced administrators only.)<br />
							</div>
							<div>
								<span class="strong">Enable images in the RTE:</span><br />
								1
							</div>
							<div>
								<span class="strong">Enable links accessibility icons:</span><br />
								0
							</div>
							<div class="code">
/** 
 * Page TS Config - Rich Text Editor Setup
 *
 * @author		Jean-David Gadina &lt;info@macmade.net&gt;
 * @version		2.0
 */
RTE {
	
	// Colors definition
	colors {
		
		color1 {
			name = Orange / Typo3
			value = #FF8700
		}
		color2 {
			name = Green / macmade.net
			value = #8CE500
		}
		color3 {
			name = Orange / macmade.net
			value = #FF4D00
		}
		color4 {
			name = Blue / macmade.net
			value = #00B2FF
		}
		color5 {
			name = Pink / macmade.net
			value = #FF0080
		}
		color6 {
			name = Gray / macmade.net
			value = #4D4D4D
		}
	}
	
	// Classes definition
	classes &gt;
	
	// Anchor classes definition
	classesAnchor &gt;
	classesAnchor {
		
		// Extenral
		externalLink {
			type = url
			altText = LLL:EXT:rtehtmlarea/htmlarea/plugins/TYPO3Browsers/locallang.xml:external_link_altText
		}
		
		// External in new window
		externalLinkInNewWindow {
			class = external-link-new-window
			type = url
			altText = LLL:EXT:rtehtmlarea/htmlarea/plugins/TYPO3Browsers/locallang.xml:external_link_new_window_altText
		}
		
		// Internal
		internalLink {
			class = internal-link
			type = page
			altText = LLL:EXT:rtehtmlarea/htmlarea/plugins/TYPO3Browsers/locallang.xml:internal_link_altText
		}
		
		// Internal in new window
		internalLinkInNewWindow {
			class = internal-link-new-window
			type = page
			altText = LLL:EXT:rtehtmlarea/htmlarea/plugins/TYPO3Browsers/locallang.xml:internal_link_new_window_altText
		}
		
		// Download
		download {
			class = download
			type = file
			altText = LLL:EXT:rtehtmlarea/htmlarea/plugins/TYPO3Browsers/locallang.xml:download_altText
		}
		
		// Mail
		mail {
			class = mail
			type = mail
			altText = LLL:EXT:rtehtmlarea/htmlarea/plugins/TYPO3Browsers/locallang.xml:mail_altText
		}
	}
	
	// Default RTE configuration (all tables)
	default {
		
		// Disable RTE
		disable = 0
		
		// Available classes for HTML elements
		classesParagraph &gt;
		classesTable &gt;
		classesTD &gt;
		classesLinks &gt;
		classesCharacter &gt;
		classesAnchor &gt;
		classesImage &gt;
		
		// Anchor classes
		classesAnchor = external-link,external-link-new-window,internal-link,internal-link-new-window,download,mail
		
		// Default anchor classes
		classesAnchor.default {
			page = internal-link
			url = external-link-new-window
			file = download
			mail = mail
		}
		
		// Show tags from content CSS
		showTagFreeClasses = 0
		
		// Disable examples styles
		disablePCexamples = 1
		
		// Disable Typo3 specific browsers
		disableTYPO3Browsers = 0
		
		// Tab elements to remove in the picture popup
		blindImageOptions &gt;
		
		// Default target for links
		defaultLinkTarget = _blank 
		
		// Tab elements to remove in the link popup
		blindLinkOptions &gt;
		
		// Buttons to show
		showButtons = *
		
		// Buttons to hide
		hideButtons = fontstyle, fontsize, blockstyle, textstyle
		
		// Toolbar order
		toolbarOrder = formatblock, space, bar, space, bold, italic, underline, strikethrough, subscript, superscript, space, bar, space, left, center, right, justifyfull, space, bar, space, textcolor, bgcolor, textindicator, linebreak, lefttoright, righttoleft, space, bar, space, orderedlist, unorderedlist, outdent, indent, space, bar, space, link, image, insertcharacter, line, table, acronym, inserttag, emoticon, user, linebreak, findreplace, removeformat, spellcheck, space, bar, space, copy, cut, paste, space, bar, space, undo, redo, space, bar, space, chMode, showhelp, about, linebreak, toggleborders, space, bar, space, tableproperties, rowproperties, rowinsertabove, rowinsertunder, rowdelete, rowsplit, columninsertbefore, columninsertafter, columndelete, columnsplit, cellproperties, cellinsertbefore, cellinsertafter, celldelete, cellsplit, cellmerge
		
		// Group buttons (Mozilla only)
		keepButtonGroupTogether = 1
		
		// Hide table operations
		hideTableOperationsInToolbar = 0
		
		// Show toggle borders item even if table operations are disabled
		keepToggleBordersInToolbar = 0
		
		// Disable contextual menu
		disableContextMenu = 0
		disableRightClick = 0
		
		// Display status bar
		showStatusBar = 1
		
		// Disable color picker
		disableColorPicker = 0
		
		// Disable color selector
		disableSelectColor = 0
		
		// RTE stylesheet
		contentCSS = fileadmin/templates/rte.css
		
		// MS Word cleaning
		enableWordClean = 1
		
		// Remove HTML comments
		removeComments = 1
		
		// Remove HTML tags
		removeTags = font
		
		// Remove HTML tags and their content
		removeTagsAndContents =
		
		// Use CSS formatting when possible
		useCSS = 1
		
		// Disable enter key for new paragraphs creation
		disableEnterParagraphs = 0
		
		// Remove trailing BR if any
		removeTrailingBR = 1
		
		// Hide tags in the quick tag plugin
		hideTags = font, font (full)
		
		// Disable table attributes for table operations
		disableAlignmentFieldsetInTableOperations = 0
		disableSpacingFieldsetInTableOperations = 0
		disableColorFieldsetInTableOperations = 0
		disableLayoutFieldsetInTableOperations = 0
		disableBordersFieldsetInTableOperations = 0
		
		// Colors available
		colors = color1,color2,color3,color4,color5,color6
		
		// Processing rules
		proc {
			
			// Transformation method
			overruleMode = ts_css
			
			// Do not convert BR into linebreaks
			dontConvBRtoParagraph = 1
			
			// Map paragraph tag
			remapParagraphTag = p
			
			// Tags allowed outside P &amp; DIV
			allowTagsOutside = hr, address
			
			// Tags allowed
			allowTags = a, abbr, acronym, address, blockquote, b, br, caption, center, cite, code, div, em, font, h1, h2, h3, h4, h5, h6, hr, i, img, li, link, ol, p, pre, q, sdfield, span, strike, strong, sub, sup, table, thead, tbody, tfoot, td, th, tr, tt, u, ul
			
			// Tags denied
			denyTags &gt;
			
			// Attributes to keep for P &amp; DIV
			keepPDIVattribs = xml:lang,class,style,align
			
			// Tags allowed outside &lt;p&gt; and &lt;div&gt; tags
			allowTagsOutside = img,hr,table,tr,th,td,h1,h2,h3,h4,h5,h6,br,ul,ol,li,pre,address
			
			// Tags allowed in Typolists
			allowTagsInTypolists = br,font,b,i,u,a,img,span
			
			// Keep unknown tags
			dontRemoveUnknownTags_db = 1
			
			// Allow tables
			preserveTables = 1
			
			// Entry HTML parser
			entryHTMLparser_db = 1
			entryHTMLparser_db {
				
				// Tags allowed
				allowTags &lt; RTE.default.proc.allowTags
				
				// Tags denied
				denyTags &gt;
				
				// HTML special characters
				htmlSpecialChars = 0
				
				// Allow IMG tags
				tags.img &gt;
				
				// Allow attributes
				tags.span.fixAttrib.style.unset &gt;
				tags.p.fixAttrib.align.unset &gt;
				tags.div.fixAttrib.align.unset &gt;
				
				// Additionnal attributes for P &amp; DIV
				div.allowedAttribs = class,style,align
				p.allowedAttribs = class,style,align
				
				// Tags to remove
				removeTags = center, font, o:p, sdfield, strike, u
				
				// Keep non matched tags
				keepNonMatchedTags = protect
			}
			
			// HTML parser
			HTMLparser_db {
				
				// Strip attributes
				noAttrib = br
				
				// XHTML compliance
				xhtml_cleaning = 1
			}
			
			// Exit HTML parser
			exitHTMLparser_db = 1
			exitHTMLparser_db {
				
				// Remap bold and italic
				tags.b.remap = strong
				tags.i.remap = em
				
				// Keep non matched tags
				keepNonMatchedTags = 1
				
				// HTML special character
				htmlSpecialChars = 0
			}
		}
	}
}

// MS Word clean options
RTE.default.enableWordClean.HTMLparser &lt; RTE.default.proc.entryHTMLparser_db

// Frontend RTE configuration
RTE.default.FE &lt; RTE.default

// Full screen for bodytext (tt_content)
TCEFORM.tt_content.bodytext.RTEfullScreenWidth= 100%
</div>
<?php
	
	// End page
	$PAGE->end();
?>
