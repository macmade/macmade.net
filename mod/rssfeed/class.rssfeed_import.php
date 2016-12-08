<?php
	
	/**
	 * RSS feed import
	 */
	class rssfeed_import extends modbase {
		
		// Module name
		var $mod = 'rssfeed';
		
		// Feed URL
		var $feed = false;
		
		// Maximum items to display
		var $max = 2;
		
		// Cache RSS feeds
		var $cache = true;
		
		// Cache time (in hours)
		var $cacheTime = 5;
		
		/**
		 * Display an RSS feed
		 * 
		 * @return		The formatted RSS feed
		 */
		function showFeed() {
			
			// Check for feed
			if ($this->feed) {
				
				// Check cache mode
				if ($this->cache) {
					
					// MD5 hash of URL
					$md5 = md5($this->feed);
					
					// Path to temp file
					$tempFile = PATH_tmp . $this->mod . '-' . $md5 . '.xml';
					
					// Check for an existing and valid temp file
					if (@file_exists($tempFile) && time() < filemtime($tempFile) + ($this->cacheTime * 3600)) {
						
						// Open temp file
						$xml = @file_get_contents($tempFile,'r');
						
					} else {
						
						// Open feed
						$xml = @file_get_contents($this->feed,'r');
						
						// Check data
						if ($xml) {
							
							// Create temp file
							$newTempFile = fopen($tempFile,'w');
							
							// Add content to temp file
							fwrite($newTempFile,$xml);
							
							// Close temp file
							fclose($newTempFile);
						}
					}
				}
				
				// Check data
				if (isset($xml) && $xml) {
					// Convert XML
					$rss = $this->DIV->xml2array($xml);
					
					// Check RSS data
					if ($this->DIV->checkArrayKeys($rss,'rss,channel',false,'array')) {
						
						// Storage
						$htmlCode = array();
						
						// Counter
						$counter = 0;
						
						// Process RSS items
						foreach($rss['rss']['channel'] as $key=>$value) {
							
							// Check counter
							if ($counter >= $this->max) {
								
								// Stop processing RSS feed
								break;
							}
							
							// Check for a valid RSS item
							if (substr($key,0,4) == 'item') {
								
								// Increase counter
								$counter++;
								
								// Storage
								$item = array();
								
								// Add title
								$item[] = $this->DIV->wrap(htmlentities($value['title']),'h3',array('class'=>'rss-title'));
								
								// Add description
								$item[] = $this->DIV->wrap(htmlentities($value['description']),'div',array('class'=>'rss-description'));
								
								// Add link
								$item[] = $this->DIV->wrap($this->DIV->wrap($this->LL->getLL('more'),'a',array('href'=>$value['link'],'title'=>$value['title'])),'div',array('class'=>'rss-link'));
								
								// Infos
								$infos = array();
								
								// RSS infos
								$infos[] = (array_key_exists('author',$value)) ? $this->DIV->wrap($this->LL->getLL('author'),'span',array('class'=>'strong')) . '<br />' . htmlentities($value['author']) . '<br />' : '';
								$infos[] = (array_key_exists('pubDate',$value)) ? $this->DIV->wrap($this->LL->getLL('date'),'span',array('class'=>'strong')) . '<br />' . date($GLOBALS['conf']['dateFormat'],strtotime($value['pubDate'])) . '<br />' : '';
								$infos[] = (array_key_exists('category',$value)) ? $this->DIV->wrap($this->LL->getLL('cat'),'span',array('class'=>'strong')) . '<br />' . htmlentities($value['category']) . '<br />' : '';
								
								// Add infos
								$item[] = $this->DIV->wrap(implode('',$infos),'div',array('class'=>'rss-infos'));
								
								// Add item
								$htmlCode[] = $this->DIV->wrap(implode('',$item),'div',array('class'=>'rss-item'));
							}
						}
						
						// Return formatted feed
						return $this->DIV->wrap(implode('',$htmlCode),'div',array('class'=>'rss-feed')) . chr(10);
					}
				}
			}
		}
	}
?>
