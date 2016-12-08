<?php
	
	/**
	 * T3FRUni2006 - Registration
	 */
	class t3fruni2006_tshirts {
		
		// Module name
		var $mod = 't3fruni2006';
		
		// Table
		var $table = 't3fruni2006_tshirts';
		
		// Available places
		var $places = 100;
		
		// Days
		var $days = array(
			'1' => '10/16/2006',
			'2' => '10/17/2006',
			'4' => '10/18/2006',
			'8' => '10/19/2006',
			'16' => '10/20/2006',
		);
		
		// Required fields
		var $required = 'name_last,name_first,email,address,city,zip,country,typo3,interest,dates,os';
		
		// Errors
		var $errors = array();
		
		// Init flag
		var $init = false;
		
		// Complete flag
		var $complete = false;
		
		// Paypal variables
		var $email = 'info@kryzalid.com';
		var $itemName = 'T3FRUni2006_tshirts';
		var $currency = 'EUR';
		var $amount = 0;
		
		// Prices
		var $prices = array(
			'day' => '1',
			'week' => '1',
		);
		
		/**
		 * Class constructor
		 * 
		 * @return		Void
		 */
		function t3fruni2006_register() {
			
			// Create lang object
			$this->LL = new lang($this);
			
			// Check POST informations
			if (array_key_exists('submit',$_POST)) {
				
				// Set init flag
				$this->init = true;
				
				// Check required fields
				if ($this->checkRequired()) {
					
					// Set paypal amount
					$this->setAmount();
					
					// Insert fields in database
					$this->insert();
					
					// Set complete flag
					$this->complete = true;
				}
			}
		}
		
		/**
		 * Check required fields
		 * 
		 * @return		
		 */
		function checkRequired() {
			
			// Required fields
			$req = explode(',',$this->required);
			
			// Process fields
			foreach($req as $field) {
				
				// Check field in POST data
				if (!array_key_exists($field,$_POST) || empty($_POST[$field])) {
					
					// Error flag
					$error = 1;
					
					// Add error
					$this->errors[$field] = true;
				}
			}
			
			// Return result
			return (isset($error)) ? false : true;
		}
		
		/**
		 * 
		 */
		function setAmount() {
			
			// Check selected days
			if ($this->computeCheckbox($_POST['dates']) == 31) {
				
				// Full week
				$this->amount = $this->prices['week'];
				
			} else {
				
				// Individual days
				$this->amount = $this->prices['day'] * count($_POST['dates']);
			}
		}
		
		/**
		 * Insert fields in database
		 * 
		 * @return		
		 */
		function insert() {
			
			// Prepare fields
			$insert = array(
				
				// Info fields
				'crdate' => time(),
				'host' => $_SERVER['REMOTE_ADDR'],
				
				// Required fields
				'name_last' => $_POST['name_last'],
				'name_first' => $_POST['name_first'],
				'email' => $_POST['email'],
				'address' => $_POST['address'],
				'city' => $_POST['city'],
				'zip' => $_POST['zip'],
				'country' => $_POST['country'],
				'typo3' => $_POST['typo3'],
				'interest' => $this->computeCheckbox($_POST['interest']),
				'dates' => $this->computeCheckbox($_POST['dates']),
				'os' => $_POST['os'],
				
				// Optionnal fields
				'company' => (array_key_exists('company',$_POST)) ? $_POST['company'] : '',
				'phone' => (array_key_exists('phone',$_POST)) ? $_POST['phone'] : '',
				'www' => (array_key_exists('www',$_POST)) ? $_POST['www'] : '',
				'lunch' => (array_key_exists('lunch',$_POST)) ? $this->computeCheckbox($_POST['lunch']) : '',
				'notebook' => (array_key_exists('notebook',$_POST)) ? $_POST['notebook'] : '',
				'wifi' => (array_key_exists('wifi',$_POST)) ? $_POST['wifi'] : '',
				'comments' => (array_key_exists('comments',$_POST)) ? $_POST['comments'] : '',
			);
			
			// Insert fields
			$GLOBALS['DB']->db_insert($this->table,$insert);
			
			// DEBUG ONLY - Show fields
			#$GLOBALS['DIV']->debug($insert);
		}
		
		/**
		 * 
		 */
		function computeCheckbox($array) {
			
			// Result
			$result = 0;
			
			// Process input array
			foreach($array as $value) {
				
				// Add checkbox value
				$result += $value;
			}
			
			// Return result
			return $result;
		}
		
		/**
		 * Get form error
		 * 
		 * @param		$id					The id of the POST data
		 * @return		The error text if any
		 */
		function getError($id) {
			
			// Check error
			if (array_key_exists($id,$this->errors)) {
				
				// Return error message
				return $GLOBALS['DIV']->wrap($this->LL->getLL('error.required') . '<br />','span',array('class'=>'error'));
			}
		}
		
		/**
		 * Get form value
		 * 
		 * @param		$id					The id of the POST data
		 * @return		The value if any
		 */
		function getValue($id) {
			
			// Check data
			if (array_key_exists($id,$_POST) && !$this->complete) {
				
				// Return value
				return $_POST[$id];
			}
		}
		
		/**
		 * Get module status
		 * 
		 * @return		A confirmation or an error message
		 */
		function getStatus() {
			
			// Check init flag
			if ($this->init) {
				
				// Message to display
				$message = ($this->complete) ? $GLOBALS['DIV']->wrap($this->LL->getLL('success'),'div',array('class'=>'error')) : $GLOBALS['DIV']->wrap($this->LL->getLL('error.global'),'div',array('class'=>'error'));
				
				// Return message
				return $message;
			}
		}
		
		/**
		 * Get availables places
		 * 
		 * @param		$day				The day number
		 * @return		The number of available places
		 */
		function getPlaces($day) {
			
			// Storage
			$where = array();
			
			// Process possibilities
			for ($i = 0; $i < 32; $i++) {
				
				// Bitwise comparison
				if ($day & $i) {
					
					// Add possibility
					$where[] = $i;
				}
			}
			
			// Check for possibilities
			if (count($where)) {
				
				// Select users
				$res = $GLOBALS['DB']->db_select($this->table,'*','dates IN (' . implode(',',$where) . ')');
				
				// Results number
				$num = mysql_num_rows($res);
				
				// Date
				$date = strftime($GLOBALS['conf']['dateFormatSTRF'],strtotime($this->days[$day]));
				
				// Plaves available
				$places = $this->places - $num;
				
				// Check available places
				if ($places > 0) {
					
					// Return input
					return '<input name="dates[]" id="dates-' . $day . '" type="checkbox" value="' . $day . '" /> ' . $date . ' <span class="red">' . sprintf($this->LL->getLL('available'),$places) . '</span><br />';
					
				} else {
					
					// Return message
					return $date . ' ' . $this->LL->getLL('sorry') . '<br />';
				}
			}
		}
	}
?>
