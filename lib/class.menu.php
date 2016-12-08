<?php
	
	/**
	 * Menu.
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *       51:		function menu
	 *       84:		function buildMenu($level=1,$depth=0)
	 *      107:		function getParent($level)
	 *      161:		function menuItems($items,$depth,$level,$current=0)
	 * 
	 *				TOTAL FUNCTIONS: 4
	 */
	
	class menu {
		
		// Complete flag
		var $complete = false;
		
		// Current level
		var $level;
		
		// Path info
		var $path;
		
		// Access keys
		var $accessKeys = array();
		
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		/**
		 * Class constructor.
		 * 
		 * @return		Void
		 */
		function menu() {
			
			// Include menu file
			require_once(PATH_site . 'menu/menu.inc.php');
			
			// Check menu
			if ($GLOBALS['DIV']->checkArrayKeys($GLOBALS,'menu,' . SYS_lang)) {
				
				// Parse current URI
				$path = $_SERVER['REQUEST_URI'];
				
				// Path segments
				$this->path = explode('/',$path);
				
				array_shift($this->path);
				
				// Check path infos
				if (count($this->path)) {
					
					// Current level
					$this->level = count($this->path) - 2;
					
					// Set complete flag
					$this->complete = true;
				}
			}
		}
		
		/**
		 * Build a menu.
		 * 
		 * @param		$level				The initial level
		 * @param		$depth				The depth of the menu (0 means no submenu)
		 * @return		The HTML code for the menu
		 */
		function buildMenu($level=1,$depth=0) {
			
			// Check complete flag
			if ($this->complete) {
				
				// Storage
				$menu = array();
				
				// Get parent menu
				if ($parent = $this->getParent($level)) {
					
					// Build and return menu items
					return $this->menuItems($parent,$depth,$level);
				}
			}
		}
		
		/**
		 * Get parent menu for a specific level.
		 * 
		 * @param		$level				The level of the menu
		 * @return		An array with menu items
		 */
		function getParent($level) {
			
			// Full menu
			$root = $GLOBALS['menu'][SYS_lang];
			
			// Process levels
			for($i = 1; $i < $level; $i++) {
				
				// Process items in current level
				foreach($root as $child) {
					
					// Check item
					if ($this->path[$i] == $child['href']) {
						
						// Check for subitems
						if (array_key_exists('subitems',$child)) {
							
							// New root
							$root = $child['subitems'];
							
							// Number of structure to break
							$break = 1;
							
						} else {
							
							// Number of structure to break
							$break = 2;
						}
						
						// Exit loop
						if($break == 2) {
							
							break 2;
						}
						else {
							
							break 1;
						}
						
					} else {
						
						// Root not found
						$root = false;
					}
				}
			}
			
			// Return parent
			return $root;
		}
		
		/**
		 * Build menu items.
		 * 
		 * @param		$items				The items to build
		 * @param		$depth				The depth of the menu
		 * @param		$level				The level of the menu
		 * @param		$current			The current level (internal use only)
		 * @param		$parentPath			The path of the parent item (internal use only)
		 * @return		The HTML code for the menu items
		 */
		function menuItems($items,$depth,$level,$current=0,$parentPath='') {
			
			// Check array
			if (is_array($items)) {
				
				// Storage
				$menu = array();
				
				// Process current level
				foreach($items as $key=>$value) {
					
					// Item title
					$title = $value['title'];
					
					// Check for access keys
					if (array_key_exists('accesskey',$value) && $value['accesskey']) {
						
						// Process title
						for ($i = 0; $i < strlen($value['title']); $i++) {
							
							// Title substring
							$letter = substr($value['title'],$i,1);
							
							// Check for valid characters
							if (!preg_match('/^[a-z0-9]$/',$letter)) {
								
								// Next letter
								continue;
							}
							
							// Check for letter
							if (!in_array($letter,$this->accessKeys)) {
								
								// Store letter
								$this->accessKeys[] = $accessKey = $letter;
								
								// Add span to title
								$title = substr_replace($title,'<span class="access-key">' . $letter . '</span>',$i,1);
								
								// Exit loop
								break;
								
							} else {
								
								// No access key
								$accessKey = false;
							}
						}
					}
					
					// Key separator if available
					$keySep = (array_key_exists('keySep',$value) && $value['keySep']) ? $value['keySep'] : ' ';
					
					// Item title
					$displayTitle = (array_key_exists('addKey',$value) && $value['addKey']) ? $GLOBALS['DIV']->wrap($key . $keySep . $title,'span') : $GLOBALS['DIV']->wrap($title,'span');
					
					// Path to the menu item
					$path = array_slice($this->path,0,$level);
					
					// Current item path
					$itemPath = $value['href'] . '/';
					
					// Item URI
					$uri = '/' . implode('/',$path). '/' . $parentPath . $itemPath;
					
					// Link parameters
					$linkParams = array('href'=>$uri,'title'=>$value['title']);
					
					// Check for an access key
					if (isset($accessKey) && $accessKey) {
						
						// Add access key to link parameters
						$linkParams['accesskey'] = strtoupper($accessKey);
					}
					
					// Link
					$link = $GLOBALS['DIV']->wrap($displayTitle,'a',$linkParams);
					
					// DIV parameters
					$div_params = (array_key_exists('class',$value)) ? array('class'=>$value['class']) : array();
					
					// Div
					$div = $GLOBALS['DIV']->wrap($link,'div',$div_params);
					
					// List tag parameters
					$li_params = array();
					
					// Path info
					$pathInfo = (array_key_exists($level + $current,$this->path)) ? $this->path[$level + $current] : false;
					
					// Subitems
					$subItems = '';
					
					// Check active state
					if ($pathInfo && $pathInfo == $value['href']) {
						
						// Current item is active
						$li_params['class'] = 'act';
						
						// Get subitems if necessary
						$subItems = ($GLOBALS['DIV']->checkArrayKeys($value,'subitems',0,'array') && $depth > $current) ? $this->menuItems($value['subitems'],$depth,$level,$current + 1,$parentPath . $itemPath) : '';
					}
					
					// Add list item to menu
					$menu[] = $GLOBALS['DIV']->wrap($div . $subItems,'li',$li_params);
				}
				
				// Check menu items
				if (count($menu)) {
					
					// Return full menu
					return $GLOBALS['DIV']->wrap(implode('',$menu),'ul');
				}
			}
		}
	}
?>
