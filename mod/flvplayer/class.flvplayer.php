<?php
	
	/**
	 * MP3 Player
	 */
	class flvplayer extends modbase {
		
		// Module name
		var $mod = 'flvplayer';
		
		// Movie file location
		var $movie;
		
		// Autostart
		var $autostart = 'true';
		
		// Player location
		var $player;
		
		// Flash settings
		var $width = '320';
		var $height = '240';
		var $loop = 'false';
		var $menu = 'false';
		var $quality = 'best';
		var $scale = 'showall';
		var $bgcolor = '#FFFFFF';
		var $swliveconnect = 'false';
		var $salign = 'lt'; 
		var $wmode = 'window';
		
		/**
		 * Create the FLV player
		 * 
		 * @return		The Flash FLV player
		 */
		function createPlayer() {
			
			// Set player
			$this->player = str_replace(PATH_site,'/',PATH_mod . $this->mod . '/flvplayer.swf');
			
			// Storage
			$htmlCode = array();
			
			$htmlCode[] = '<object type="application/x-shockwave-flash" data="' . $this->player . '" width="' . $this->width . '" height="' . $this->height . '">';
			$htmlCode[] = '<param name="loop" value="' . $this->loop . '" />';
			$htmlCode[] = '<param name="menu" value="' . $this->menu . '" />';
			$htmlCode[] = '<param name="quality" value="' . $this->quality . '" />';
			$htmlCode[] = '<param name="scale" value="' . $this->scale . '" />';
			$htmlCode[] = '<param name="bgcolor" value="' . $this->bgcolor . '" />';
			$htmlCode[] = '<param name="swliveconnect" value="' . $this->swliveconnect . '" />';
			$htmlCode[] = '<param name="salign" value="' . $this->salign . '" />';
			$htmlCode[] = '<param name="wmode" value="' . $this->wmode . '" />';
			$htmlCode[] = '<param name="FlashVars" value="autostart=' . $this->autostart . '&file=' . $this->movie . '" />';
			$htmlCode[] = '<param name="movie" value="' . $this->player . '" />';
			$htmlCode[] = '</object>';
			
			// Return player
			return $this->DIV->wrap(implode('',$htmlCode),'div',array('class'=>'mp3player'));
		}
	}
?>
