<?php
	
	/**
	 * Lang.
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *       38:		function lang(&$pObj)
	 *       52:		function getLL($key)
	 * 
	 *				TOTAL FUNCTIONS: 2
	 */
	
	class lang {
		
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		/**
		 * Class constructor.
		 * 
		 * @param		$pObj				The parent object
		 * @return		Void
		 */
		function lang(&$pObj) {
			
			// Include locallang file
			require_once(PATH_mod . $pObj->mod . '/locallang.inc.php');
		}
		
		/**
		 * Get language label.
		 * 
		 * This function returns a localized string from the lang file.
		 * 
		 * @param		$key				The key of the label
		 * @return		The localized string
		 */
		function getLL($key) {
			
			// Check LANG array
			if (defined('SYS_lang') && isset($GLOBALS['LANG']) && is_array($GLOBALS['LANG']) && array_key_exists(SYS_lang,$GLOBALS['LANG']) && array_key_exists($key,$GLOBALS['LANG'][SYS_lang])) {
				
				// Return string
				return $GLOBALS['LANG'][SYS_lang][$key];
			}
		}
	}
?>
