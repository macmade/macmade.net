<?php
	
	/**
	 * Page.
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *       54:		function start
	 *       68:		function end
	 *       79:		function getTitle
	 *      136:		function headerData
	 *      172:		function addJS($src,$charset='iso-8859-1',$type='text/javascript')
	 *      187:		function addCSS($href,$media='screen',$charset='iso-8859-1',$type='text/css')
	 *      203:		function addLink($title,$href,$type,$rel,$rev)
	 * 
	 *				TOTAL FUNCTIONS: 7
	 */
	
	class page {
		
		// JavaScript storage
		var $js = array();
		
		// JavaScript storage
		var $css = array();
		
		// Links storage
		var $links = array();
		
		// Page title
		var $title = false;
		
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		/**
		 * Start page.
		 * 
		 * @return		Void
		 */
		function start() {
			
			// Get page title
			$this->getTitle();
			
			// Include locallang file
			require_once(PATH_inc . 'header.inc.php');
		}
		
		/**
		 * End page.
		 * 
		 * @return		Void
		 */
		function end() {
			
			// Include locallang file
			require_once(PATH_inc . 'footer.inc.php');
		}
		
		/**
		 * Get current page title
		 * 
		 * @return		Void
		 */
		function getTitle() {
			
			// Check menu class
			if ($GLOBALS['MENU']->complete) {
				
				// Parse current URI
				$path = $_SERVER['REQUEST_URI'];
				
				// Path segments
				$pathInfo = explode('/',$path);
				
				array_shift($pathInfo);
				
				// Current language
				$lang = array_shift($pathInfo);
				
				// Menu section to parse
				$menu = $GLOBALS['menu'][$lang];
				
				// Process levels
				for($i = 0; $i < $GLOBALS['MENU']->level; $i++) {
					
					// Process menu items
					foreach($menu as $page) {
						
						// Check section
						if ($page['href'] == $pathInfo[$i]) {
							
							// Separator
							$sep = ($i == 0) ? ': ' : ' - ';
							
							// Set title
							$this->title .= $sep . $page['title'];
							
							// Check for subitems
							if (array_key_exists('subitems',$page)) {
								
								// Set menu to subitems
								$menu = $page['subitems'];
								
							} else {
								
								// No subitems - Exit loop
								break;
							}
							
							// Exit loop
							break;
						}
					}
				}
			}
		}
		
		/**
		 * Display additionnal page header data
		 * 
		 * @return		Additionnal header code for the current page
		 */
		function headerData() {
			
			// Storage
			$header = array();
			
			// Separator
			$sep = chr(10) . chr(9) . chr(9);
			
			// Start comment
			$header[] = $sep . '<!-- SPECIFIC PAGE HEADER DATA -->';
			
			// Check for specific data
			if (count($this->js) || count($this->css) || count($this->links)) {
				
				// Add CSS
				$header[] = implode($sep,$this->css);
				
				// Add JS
				$header[] = implode($sep,$this->js);
				
				// Add links
				$header[] = implode($sep,$this->links);
			}
			
			// Return additionnal header code
			return implode($sep,$header) . chr(10);
		}
		
		/**
		 * Add script.
		 * 
		 * @param		$src				The script source (relative to the JS dir)
		 * @param		$charset			The script charset
		 * @param		$type				The script type
		 * @return		Void
		 */
		function addJS($src,$charset='iso-8859-1',$type='text/javascript') {
			
			// Add script
			$this->js[] = '<script src="/js/' . $src . '" type="' . $type . '" charset="' . $charset . '"></script>';
		}
		
		/**
		 * Add stylesheet.
		 * 
		 * @param		$href				The stylesheet source (relative to the CSS dir)
		 * @param		$media				The stylesheet media
		 * @param		$charset			The stylesheet charset
		 * @param		$type				The stylesheet type
		 * @return		Void
		 */
		function addCSS($href,$media='screen',$charset='iso-8859-1',$type='text/css') {
			
			// Add stylesheet
			$this->css[] = '<link rel="stylesheet" rev="stylesheet" href="/css/' . $href . '" type="' . $type . '" media="' . $media . '" charset="' . $charset . '" />';
		}
		
		/**
		 * Add link.
		 * 
		 * @param		$title				The link title
		 * @param		$href				The link source
		 * @param		$type				The link type
		 * @param		$rel				The link rel
		 * @param		$rev				The link rev
		 * @return		Void
		 */
		function addLink($title,$href,$type,$rel,$rev) {
			
			// Add link
			$this->links[] = '<link title="' . $title . '" href="' . $href . '" type="' . $type . '" rel="' . $rel . '" rev="' . $rev . '" />';
		}
	}
?>
