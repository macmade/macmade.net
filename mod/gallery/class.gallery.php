<?php
	
	/**
	 * Photo gallery
	 */
	class gallery extends modbase {
		
		// Module name
		var $mod = 'gallery';
		
		/**
		 * Show pictures
		 * 
		 * @param		$path				The path of the directory with pictures
		 * @return		The complete gallery
		 */
		function showFiles($path) {
			
			// Full path
			$fullPath = PATH_site . $path;
			
			// Get thumbnails
			$thumbs = glob($fullPath . 'thumb-*.{jpg,png,jpeg,gif}',GLOB_BRACE);
			
			// Storage
			$htmlCode = array();
			
			// Process thumbnails
			foreach($thumbs as $pic) {
				
				// Picture path
				$src = str_replace(PATH_site,'/',$pic);
				
				// Image size
				$size = getimagesize($pic);
				
				// Image name
				$name = str_replace($fullPath,'',$pic);
				
				// IMG tag
				$img = (array_key_exists(3,$size)) ? '<img src="' . $src . '" alt="' . $name . '" ' . $size[3] . ' />' : '<img src="' . $src . '" alt="' . $name . '" />';
				
				// Original image
				$link = str_replace('thumb-','',$src);
				
				// Image title & caption
				$title = str_replace('thumb-','',$name);
				
				// Image with link
				$fullImage = $this->DIV->wrap($img,'a',array('href'=>$link,'rel'=>'lightbox','title'=>$title));
				
				// Add image
				$htmlCode[] = $this->DIV->wrap($fullImage,'div',array('class'=>'left'));
			}
			
			// Return code
			return $this->DIV->wrap(implode('',$htmlCode),'div',array('class'=>'gallery'));
		}
	}
?>
