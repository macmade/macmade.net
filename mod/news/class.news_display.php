<?php
	
	/**
	 * News
	 */
	class news_display extends modbase {
		
		// Module name
		var $mod = 'news';
		
		// Upload directory
		var $uploads = 'uploads/images/news/';
		
		/**
		 * Display an RSS feed
		 * 
		 * @return		The formatted RSS feed
		 */
		function showNews() {
			
			// Check incoming GET variable
			if (isset($_GET['showNews'])) {
				
				// Storage
				$htmlCode = array();
				
				// News id
				$id = $_GET['showNews'];
				
				// Select news
				$res = $this->DB->db_select('news','*','uid=' . $id);
				
				// Check for news
				if ($res) {
					
					// Get news
					$row = mysql_fetch_assoc($res);
						
					// Prepare row for HTML output
					$row = $GLOBALS['DIV']->htmlEncode($row);
					
					// Storage
					$item = array();
					
					// Add title
					$item[] = $this->DIV->wrap($row['title'],'h1',array('class'=>'news-title'));
					
					// Add subtitle
					$item[] = $this->DIV->wrap($row['subtitle'],'h2',array('class'=>'news-subtitle'));
					
					// Infos
					$infos = array();
					
					// News infos
					$infos[] = $this->DIV->wrap($this->LL->getLL('author'),'span',array('class'=>'strong')) . ' ' . $row['author'] . '<br />';
					$infos[] = $this->DIV->wrap($this->LL->getLL('date'),'span',array('class'=>'strong')) . ' ' . date($GLOBALS['conf']['dateFormat'],$row['crdate']) . '<br />';
					
					// Add infos
					$item[] = $this->DIV->wrap(implode('',$infos),'div',array('class'=>'news-infos'));
					
					// Check for a picture
					if (!empty($row['picture'])) {
						
						// Picture
						$picture = $row['picture'];
						
						// Thumbnail
						$thumb = 'thumb-' . $row['picture'];
						
						// Thumbnail relative path
						$relPath = $this->uploads . $thumb;
						
						// Thumb absolute path
						$absPath = PATH_site . $relPath;
						
						// Image size
						$size = getimagesize($absPath);;
						
						// IMG tag
						$img = (array_key_exists(3,$size)) ? '<img src="/' . $relPath . '" alt="' . $thumb . '" ' . $size[3] . ' />' : '<img src="/' . $relPath . '" alt="' . $thumb . '" />';
						
						// Original image
						$link = '/' . $this->uploads . $picture;
						
						// Image with link
						$fullImage = $this->DIV->wrap($img,'a',array('href'=>$link,'rel'=>'lightbox','title'=>$picture));
						
						// Add image
						$item[] = $this->DIV->wrap($fullImage,'div',array('class'=>'right'));
					}
					
					// Add content
					$item[] = $this->DIV->wrap(nl2br($row['content']),'div',array('class'=>'news-content'));
					
					// Check fo a link
					if (!empty($row['link_title']) && !empty($row['link_href'])) {
						
						// Link tag
						$linkTag = $this->DIV->wrap($this->LL->getLL('link'),'span',array('class'=>'strong')) . ' <a href="' . $row['link_href'] . '" title="' . $row['link_title'] . '">' . $row['link_title'] . '</a>';
						
						// Add link
						$item[] = $this->DIV->wrap($linkTag,'div',array('class'=>'news-link'));
					}
					
					// Add item
					$htmlCode[] = $this->DIV->wrap(implode('',$item),'div',array('class'=>'news-item'));
					
					// Insert comment
					if (!$this->insertComment($id)) {
						
						// Error message
						$errorHeader = $this->DIV->wrap($this->LL->getLL('error'),'h2');
						$errorMsg = $this->DIV->wrap($this->LL->getLL('error.captcha'));
						
						// Add error message
						$htmlCode[] = $this->DIV->wrap($errorHeader . $errorMsg,'div',array('class'=>'error'));
					}
					
					// Get comments
					$htmlCode[] = $this->getComments($id);
					
					// Return news
					return $this->DIV->wrap(implode('',$htmlCode),'div',array('class'=>'news-single')) . chr(10);
				}
			}
		}
		
		/**
		 * Get news comments
		 * 
		 * @return		The news comments
		 */
		function insertComment($id) {
			
			// Check for POST data
			if ( isset( $_POST[ 'submit' ] ) ) {
				
				// Verify captcha
				if ( !isset( $_POST[ 'captcha' ] ) || $_SESSION[ 'CaptchaString' ] != $_POST[ 'captcha' ] ) {
					
					// Error
					return false;
				}
				// Insert data
				$insert = array(
					'crdate' => time(),
					'author' => (isset($_POST['author'])) ? $_POST['author'] : '',
					'comment' => (isset($_POST['comment'])) ? $_POST['comment'] : '',
					'news' => $id,
				);
				
				// Insert comment
				#$this->DB->db_insert('news_comments',$insert);
			}
			
			return true;
		}
		
		/**
		 * Get news comments
		 * 
		 * @return		The news comments
		 */
		function getComments($id) {
			
			// Storage
			$htmlCode = array();
			
			// Select comments
			$res = $this->DB->db_select('news_comments','*','news=' . $id, 'crdate');
			
			// Count comments
			$count = ($res) ? mysql_num_rows($res) : 0;
			
			// Links
			$links = array();
			
			// Number of comments
			$links[] = $this->DIV->wrap(sprintf($this->LL->getLL('comments.number'),$count),'a',array('href'=>$_SERVER['REQUEST_URI'] . '&amp;showComments=1','title'=>$this->LL->getLL('comments.add')));
			
			// Separator
			#$links[] = ' - ';
			
			// Add a comment
			#$links[] = $this->DIV->wrap($this->LL->getLL('comments.add'),'a',array('href'=>$_SERVER['REQUEST_URI'] . '&amp;addComment=1','title'=>$this->LL->getLL('comments.add')));
			
			// Add links
			$htmlCode[] = $this->DIV->wrap(implode('',$links),'div',array('class'=>'news-links'));
			
			// Check if form must be displayed
			if (isset($_GET['addComment'])) {
				
				// Header
				$htmlCode[] = $this->DIV->wrap($this->LL->getLL('comments.add'),'h3');
				
				// Form
				$form = array();
				
				// Author
				$form[] = $this->DIV->wrap($this->DIV->wrap($this->LL->getLL('author'),'span',array('class'=>'strong')) . '<br /><input name="author" id="author" type="text" size="50" />');
				
				// Captcha
				$form[] = $this->DIV->wrap($this->DIV->wrap($this->LL->getLL('captcha'),'span',array('class'=>'strong')) . '<br /><input name="captcha" id="captcha" type="text" size="10" />');
				$form[] = $this->DIV->wrap('<img src="' . str_replace(PATH_site,'/',PATH_lib) . 'class.captcha.php" alt="captcha" width="100" height="25" />');
				
				// Text
				$form[] = $this->DIV->wrap($this->DIV->wrap($this->LL->getLL('comment'),'span',array('class'=>'strong')) . '<br /><textarea id="comment" name="comment" rows="10" cols="50"></textarea>');
				
				// Text
				$form[] = $this->DIV->wrap('<input name="submit" id="submit" type="submit" value="' .$this->LL->getLL('comments.submit')  . '" />');
				
				// Form action
				$formAction = $_SERVER['PHP_SELF'] . '?showNews=' . $id . '&amp;showComments=1';
				
				// Full form
				$fullForm = $this->DIV->wrap(implode('',$form),'form',array('method'=>'post','enctype'=>'multipart/form-data','action'=>$formAction));
				
				// Add form
				$htmlCode[] = $this->DIV->wrap($fullForm,'div',array('class'=>'form'));
			}
			
			// Check if comments must be displayed
			if (isset($_GET['showComments'])) {
				
				// Check for comments
				if ($res && $count > 0) {
					
					// Header
					$htmlCode[] = $this->DIV->wrap($this->LL->getLL('comments'),'h3');
					
					// Check for comments
					while($row = mysql_fetch_assoc($res)) {
						
						// Storage
						$item = array();
							
						// Prepare row for HTML output
						$row = $GLOBALS['DIV']->htmlEncode($row);
						
						// Infos
						$infos = array();
						
						// News infos
						$infos[] = $this->DIV->wrap($this->LL->getLL('author'),'span',array('class'=>'strong')) . ' ' . $row['author'] . '<br />';
						$infos[] = $this->DIV->wrap($this->LL->getLL('date'),'span',array('class'=>'strong')) . ' ' . date($GLOBALS['conf']['dateFormat'],$row['crdate']) . '<br />';
						
						// Add infos
						$item[] = $this->DIV->wrap(implode('',$infos),'div',array('class'=>'comment-infos'));
						
						// Comment
						$item[] = $this->DIV->wrap($row['comment'],'div',array('class'=>'comment-text'));
						
						// Add comment
						$htmlCode[] = $this->DIV->wrap(implode('',$item),'div',array('class'=>'comment'));
					}
				}
			}
			
			// Return comments
			return $this->DIV->wrap(implode('',$htmlCode),'div',array('class'=>'news-comments')) . chr(10);
		}
	}
?>
