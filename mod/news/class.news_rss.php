<?php
	
	/**
	 * RSS feed export
	 */
	class news_rss extends modbase {
		
		// Module name
		var $mod = 'news';
		
		// Maximum items to display
		var $max = 10;
		
		// Maximum characters to display
		var $maxChars = 250;
		
		// News display page
		var $displayPage = false;
		
		// XML storage
		var $xml = array();
		
		// XML charset
		var $charset = 'utf-8';
		
		// Channel title
		var $title = false;
		
		// Channel title
		var $link = false;
		
		// Channel title
		var $language = false;
		
		// Channel title
		var $description = false;
		
		// Date format
		var $dateFormat = '%a, %d %b %Y %T %Z';
	
		
		/**
		 * Display an RSS feed
		 * 
		 * @return		The formatted RSS feed
		 */
		function createFeed() {
			
			// Create RSS channel
			$this->xml['channel'] = array();
			
			// RSS version
			$this->xml['xml-attribs'] = array('version'=>'2.0');
			
			// Add channel infos
			$this->xml['channel']['title'] = $this->title;
			$this->xml['channel']['link'] = $this->link;
			$this->xml['channel']['language'] = $this->language;
			$this->xml['channel']['description'] = $this->description;
			
			// Select news
			$res = $GLOBALS['DB']->db_select('news','*','rss=1','crdate DESC',$this->max);
			
			// Check for news
			if ($res) {
				
				// Process news
				while ($row = mysql_fetch_assoc($res)) {
					
					// Storage
					$item = array();
					
					// Prepare row for output
					$row = $this->DIV->htmlEncode($row);
					
					// URL
					$url = $this->displayPage . '?showNews=' . $row['uid'];
					
					// Content
					$content = (strlen($row['content']) > $this->maxChars) ? substr($row['content'],0,$this->maxChars) . '...' : $row['content'];
					
					// Add item childs
					$item['title'] = $row['title'];
					$item['link'] = $url;
					$item['description'] = $content;
					$item['author'] = $row['author'];
					$item['pubDate'] = strftime($this->dateFormat,$row['crdate']);
					
					// Add item
					$this->xml['channel'][] = $item;
				}
			}
			
			// Return XML feed
			return $this->DIV->array2xml($this->xml,$xmlRoot='rss','','item','index','type',1,$this->charset);
		}
	}
?>
