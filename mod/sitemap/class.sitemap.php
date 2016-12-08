<?php
	
	/**
	 * Sitemap
	 */
	class sitemap extends modbase {
		
		// Module name
		var $mod = 'sitemap';
		
		// Base URL
		var $baseUrl;
		
		// Index file name
		var $index = 'index.php';
		
		// Date format
		var $dateFormat = 'Y-m-d';
		
		// XML namespace
		var $xmlns = 'http://www.google.com/schemas/sitemap/0.84';
		
		/**
		 * Class constructor.
		 * 
		 * @return		Void
		 */
		function sitemap() {
			
			// Parent constructor
			parent::modbase();
			
			// Include menu file
			require_once(PATH_site . 'menu/menu.inc.php');
			
			// Check menu
			if (isset($GLOBALS['menu'])) {
				
				// Set base URL
				$this->baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/';
				
				// Set complete flag
				$this->complete = true;
			}
		}
		
		/**
		 * 
		 */
		function createSiteMap() {
			
			// Check complete state
			if ($this->complete) {
				
				// Get menu items
				$items = $this->getItems($GLOBALS['menu']);
				
				// Return XML sitemap
				return $this->DIV->array2xml($items,$xmlRoot='urlset','','url','index',false,1,'utf-8');
			}
		}
		
		/**
		 * 
		 */
		function getItems(&$items,$parent=false) {
			
			// Check items
			if (is_array($items)) {
				
				// Items storage
				$map = array(
					'xml-attribs' => array(
						'xmlns' => $this->xmlns,
					),
				);
				
				// Check level
				if ($parent) {
					
					// Process items
					foreach($items as $key=>$value) {
						
						// language storage
						$url = array();
						
						// Add URL
						$url['loc'] = $this->baseUrl . $parent . $value['href'] . '/';
						
						// Add modification date
						$url['lastmod'] = $this->getModification($parent . $value['href'] . '/');
						
						// Add language
						$map[] = $url;
						
						if (array_key_exists('subitems',$value)) {
							
							// Get language items
							$sub = $this->getItems($value['subitems'],$parent . $value['href'] . '/');
							
							// Add subitems
							$map = array_merge($map,$sub);
						}
					}
					
				} else {
					
					// Add root element
					$map[] = array(
						'loc' => $this->baseUrl,
						'lastmod' => $this->getModification(''),
					);
					
					// Process languages
					foreach($items as $key=>$value) {
						
						// language storage
						$url = array();
						
						// Add location
						$url['loc'] = $this->baseUrl . $key . '/';
						
						// Add modification date
						$url['lastmod'] = $this->getModification($key . '/');
						
						// Add language
						$map[] = $url;
						
						// Check for items
						if (count($value)) {
							
							// Get language items
							$sub = $this->getItems($value,$key . '/');
							
							// Add subitems
							$map = array_merge($map,$sub);
						}
					}
				}
				
				// Return items
				return $map;
			}
		}
		
		/**
		 * 
		 */
		function getModification($path) {
			
			// Absolute path
			$absPath = PATH_site . $path . $this->index;
			
			if (file_exists($absPath)) {
				
				// Modification time
				$mtime = filemtime($absPath);
				
				// Return date
				return date($this->dateFormat,$mtime);
			}
		}
	}
?>
