<?php
	
	/**
	 * T3FRUni2006 - Registration
	 */
	class t3fruni2006_register {
		
		// Module name
		var $mod = 't3fruni2006';
		
		// Table
		var $table = 't3fruni2006_people';
		
		// Available places
		var $places = 100;
		
		// Registration will be closed on that date
		var $closed = '2006/10/08';
		
		// Days
		var $days = array(
			'1' => '10/16/2006',
			'2' => '10/17/2006',
			'4' => '10/18/2006',
			'8' => '10/19/2006',
			'16' => '10/20/2006',
		);
		
		// Required fields
		var $required = 'name_last,name_first,email,address,city,zip,country,typo3,interest,dates,os,payment';
		
		// Errors
		var $errors = array();
		
		// Init flag
		var $init = false;
		
		// Complete flag
		var $complete = false;
		
		// Total amount
		var $amount = array(
			'EUR' => false,
			'CHF' => false,
		);
		
		// Payment option
		var $payment = false;
		
		// Prices
		var $prices = array(
			'day' => array(
				'EUR' => '20',
				'CHF' => '30',
			),
			'week' => array(
				'EUR' => '65',
				'CHF' => '100',
			),
		);
		
		// Email variables
		var $mailer = array(
			'subject' => 'Inscription T3FRUni2006',
			'from' => 'Jean-David Gadina <info@macmade.net>',
		);
		
		/**
		 * Class constructor
		 * 
		 * @return		Void
		 */
		function t3fruni2006_register() {
			
			// Create lang object
			$this->LL = new lang($this);
			
			// Close date
			$closed = strtotime($this->closed);

			// Check POST informations
			if (array_key_exists('submit',$_POST) && time() < $closed) {
				
				// Set init flag
				$this->init = true;
				
				// Check required fields
				if ($this->checkRequired()) {
					
					// Set paypal amount
					$this->setAmount();
					
					// Insert fields in database
					$this->insert();
					
					// Conformation email
					$this->sendConfirmation();
					
					// Set complete flag
					$this->complete = true;
				}
			}
		}
		
		/**
		 * Check required fields
		 * 
		 * @return		Boolean
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
		 * Set total amount for the registration
		 * 
		 * @return		The total price
		 */
		function setAmount() {
			
			// Check selected days
			if ($this->computeCheckbox($_POST['dates']) == 31) {
				
				// Full week
				$this->amount['EUR'] = $this->prices['week']['EUR'];
				$this->amount['CHF'] = $this->prices['week']['CHF'];
				
			} else {
				
				// Individual days
				$this->amount['EUR'] = $this->prices['day']['EUR'] * count($_POST['dates']);
				$this->amount['CHF'] = $this->prices['day']['CHF'] * count($_POST['dates']);
			}
			
			// Store payment option
			$this->payment = $_POST['payment'];
		}
		
		/**
		 * Insert fields in database
		 * 
		 * @return		Void
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
				'payment' => $_POST['payment'],
				
				// Optionnal fields
				'nickname' => (array_key_exists('nickname',$_POST)) ? $_POST['nickname'] : '',
				'company' => (array_key_exists('company',$_POST)) ? $_POST['company'] : '',
				'phone' => (array_key_exists('phone',$_POST)) ? $_POST['phone'] : '',
				'www' => (array_key_exists('www',$_POST)) ? $_POST['www'] : '',
				'lunch' => (array_key_exists('lunch',$_POST)) ? $this->computeCheckbox($_POST['lunch']) : '',
				'notebook' => (array_key_exists('notebook',$_POST)) ? $_POST['notebook'] : '',
				'wifi' => (array_key_exists('wifi',$_POST)) ? $_POST['wifi'] : '',
				'mac_address' => (array_key_exists('mac_address',$_POST)) ? $_POST['mac_address'] : '',
				'comments' => (array_key_exists('comments',$_POST)) ? $_POST['comments'] : '',
			);
			
			// Insert fields
			$GLOBALS['DB']->db_insert($this->table,$insert);
			
			// DEBUG ONLY - Show fields
			#$GLOBALS['DIV']->debug($insert);
		}
		
		/**
		 * Compute checkboxes for database
		 * 
		 * @param		$array				The checkboxes array from POST data
		 * @return		The result for the selected checkboxes
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
		
		/**
		 * Send a confirmation email
		 * 
		 * @return		Void
		 */
		function sendConfirmation() {
			
			// Storage
			$message = array();
			
			// New mailer object
			$mailer = new mailer();
			
			// Mail data
			$mailer->to = $_POST['email'];
			$mailer->subject = $this->mailer['subject'];
			$mailer->from = $this->mailer['from'];
			
			// Message
			$message[] = 'Bonjour ' . $_POST['name_first'] . ' ' . $_POST['name_last'] . ',';
			$message[] = '';
			$message[] = 'Merci de vous être inscrit à l\'université TYPO3 France 2006.';
			$message[] = '';
			$message[] = 'Nous vous envoyons ce mail pour vous confirmer votre inscription.';
			
			// Check payment option
			if ($this->payment == 1) {
				
				// Bank transfer
				$message[] = 'Vous avez choisi de payer la somme de EUR ' . $this->amount['EUR'] . '.- (CHF ' . $this->amount['CHF'] . '.-) par virement bancaire.';
				$message[] = '';
				$message[] = 'Paiement depuis la suisse:';
				$message[] = 'Jean-David Gadina';
				$message[] = '1131 Tolochenaz';
				$message[] = 'CCP 17-52307-4';
				$message[] = '';
				$message[] = 'Paiement depuis l\'étranger:';
				$message[] = 'IBAN électronique: CH0909000000170523074';
				$message[] = 'IBAN papier: IBAN CH09 0900 0000 1705 2307 4';
				$message[] = 'Code SWIFT / BIC: POFICHBEXXX';
				$message[] = 'Banque du bénéficiaire: Swiss Post, Postfinance, Nordring 8, CH-3030 Bern';
				$message[] = 'Numéro Clearing: 09000';
				$message[] = '';
				$message[] = 'Merci d\'apporter une confirmation du paiement, au cas où celui-ci n\'aurait pas été réceptionné avant le début de la manifestation.';
				
			} else {
				
				// On site
				$message[] = 'Vous avez choisi de payer sur place la somme de CHF ' . $this->amount['CHF'] . '.- (EUR ' . $this->amount['EUR'] . '.-). Nous vous rappelons que le montant total devra être payé en francs suisse, dès votre arrivée.';
			}
			
			$message[] = '';
			$message[] = 'En vous remerciant encore, et dans l\'attente de vous rencontrer à Lausanne, veuillez recevoir nos salutations les meilleures,';
			$message[] = '';
			$message[] = 'L\'équipe TYPO3 France';
			
			// Mail body
			$mailer->body = implode(chr(10),$message);
			
			// Send mail
			$mailer->sendMail();
		}
	}
?>
