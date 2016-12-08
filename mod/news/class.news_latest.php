<?php
	
	/**
	 * Latest news
	 */
	class news_latest extends modbase {
		
		// Module name
		var $mod = 'news';
		
		// Maximum items to display
		var $max = 2;
		
		// Maximum characters to display
		var $maxChars = 250;
		
		// News display page
		var $displayPage = false;
		
		/**
		 * Display an RSS feed
		 * 
		 * @return		The formatted RSS feed
		 */
		function showNews() {
			
			// Select news
			$res = $GLOBALS['DB']->db_select('news','*',false,'crdate DESC',$this->max);
			
			// Check for news
			if ($res) {
					
				// Storage
				$htmlCode = array();
				
				// Get news
				while($row = mysql_fetch_assoc($res)) {
					
					// Prepare row for HTML output
					$row = $GLOBALS['DIV']->htmlEncode($row);
					
					// Storage
					$item = array();
					
					// Add title
					$item[] = $this->DIV->wrap($row['title'],'h3',array('class'=>'news-title'));
					
					// Content
					$content = (strlen($row['content']) > $this->maxChars) ? substr($row['content'],0,$this->maxChars) . '...' : $row['content'];
					
					// Add content
					$item[] = $this->DIV->wrap(nl2br($content),'div',array('class'=>'news-content'));
					
					// Link
					$link = $this->displayPage . '?showNews=' . $row['uid'];
					
					// Add link
					$item[] = $this->DIV->wrap($this->DIV->wrap($this->LL->getLL('more'),'a',array('href'=>$link,'title'=>$row['title'])),'div',array('class'=>'news-link'));
					
					// Infos
					$infos = array();
					
					// News infos
					$infos[] = $this->DIV->wrap($this->LL->getLL('author'),'span',array('class'=>'strong')) . '<br />' . $row['author'] . '<br />';
					$infos[] = $this->DIV->wrap($this->LL->getLL('date'),'span',array('class'=>'strong')) . '<br />' . date($GLOBALS['conf']['dateFormat'],$row['crdate']) . '<br />';
					
					// Add infos
					$item[] = $this->DIV->wrap(implode('',$infos),'div',array('class'=>'news-infos'));
					
					// Add item
					$htmlCode[] = $this->DIV->wrap(implode('',$item),'div',array('class'=>'news-item'));
				}
				
				// Return formatted feed
				return $this->DIV->wrap(implode('',$htmlCode),'div',array('class'=>'news-latest')) . chr(10);
			}
		}
	}
?>
