<?php
	
	/**
	 * Module base.
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
	
	class modbase {
		
		
		
		
		
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
		function modbase() {
			
			// Reference to core classes for use in modules
			$this->DB = &$GLOBALS['DB'];
			$this->DIV = &$GLOBALS['DIV'];
			
			// New lang object
			$this->LL = new lang($this);
		}
	}
?>
