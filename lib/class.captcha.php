<?php
	
	/**
	 * Captcha.
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *        :		
	 * 
	 *				TOTAL FUNCTIONS: 
	 */
	
	class captcha {
		
		
		
		
		var $length      = 5;
		var $width       = 100;
		var $height      = 25;
		var $fgColor     = array(255,255,255);
		var $bgColor     = array(121,121,121);
		var $lineColor     = array(150,150,150);
		var $sessionName = 'MACSESSID';
		var $sessionVar  = 'CaptchaString';
		var $font        = 5;
		var $x           = 25;
		var $y           = 5;
		var $linePass    = 3;
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		function createImage() {
			
			$text = $this->createString();
			$image = imagecreate($this->width,$this->height);
			$backColor = imagecolorallocate($image,$this->bgColor[0],$this->bgColor[1],$this->bgColor[2]);
			$textColor = imagecolorallocate($image,$this->fgColor[0],$this->fgColor[1],$this->fgColor[2]);
			$lineColor = imagecolorallocate($image,$this->lineColor[0],$this->lineColor[1],$this->lineColor[2]);
			imagefill($image,0,0,$backColor);
			imagestring($image,$this->font,$this->x,$this->y,$text,$textColor);
			
			for ($i = 0; $i < $this->linePass; $i++) {
				
				$x1 = rand(0, $this->width - 1);
				$y1 = rand(0, round($this->height / 10, 0));
				$x2 = rand(0, round($this->width / 10, 0));
				$y2 = rand(0, $this->height - 1);
				imageline($image, $x1, $y1, $x2, $y2, $lineColor);
				
				$x1 = rand(0, $this->width - 1);
				$y1 = $this->height - rand(1, round($this->height / 10, 0));
				$x2 = $this->width - rand(1, round($this->width / 10, 0));
				$y2 = rand(0, $this->height - 1);
				imageline($image, $x1, $y1, $x2, $y2, $lineColor);
	
				$cx = rand(0, $this->width - 50) + 25;
				$cy = rand(0, $this->height - 50) + 25;
				$w = rand(1, 24);
				imagearc($image, $cx, $cy, $w, $w, 0, 360, $lineColor);
			}
			
			return $image;
		}
		
		function createString() {
			
			session_name( $this->sessionName );
			session_start();
			
			$string  = '';
			$counter = 0;
			
			while( $counter < $this->length ) {
				
				$random = rand( 48, 122 );
				
				$char = chr($random);
				
				if ( ereg('[A-Za-z]',$char) ) {
					$string .= $char;
					$counter++;
				}
			}
			
			$_SESSION[$this->sessionVar] = $string;
			
			return $string;
		}
	}
	error_reporting(E_ALL&~E_DEPRECATED);
	$captcha = new captcha();
	$image = $captcha->createImage();
	header('Content-type: image/png');
	imagepng($image);
