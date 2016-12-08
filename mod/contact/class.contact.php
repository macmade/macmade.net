<?php
	
	/**
	 * Contact
	 */
	class contact {
		
		// Module name
		var $mod = 'contact';
		
		// Required fields
		var $required = 'name_last,name_first,email,message,captcha';
		
		// Destination email
		var $email = 'macmade@xs-labs.com';
		
		// Email subject
		var $subject = 'macmade.net - Contact';
		
		// Errors
		var $errors = array();
		
		// Init flag
		var $init = false;
		
		// Complete flag
		var $complete = false;
		
		/**
		 * Class constructor
		 * 
		 * @return		Void
		 */
		function contact() {
			
			// Create lang object
			$this->LL = new lang($this);
			
			// Check POST informations and referer
			if (array_key_exists('submit',$_POST) && $this->checkSpam()) {
				
				// Set init flag
				$this->init = true;
				
				// Check required fields
				if ($this->checkRequired()) {
					
					// Insert fields in database
					$this->sendMail();
					
					// Set complete flag
					$this->complete = true;
				}
			}
		}
		
		/**
		 * Send mail
		 * 
		 * @return		Void
		 */
		function sendMail() {
			
			// New mailer object
			$mailer = new mailer();
			
			// Mail data
			$mailer->to = $this->email;
			$mailer->subject = $this->subject;
			$mailer->from = $_POST['name_first'] . ' ' . $_POST['name_last'] . ' <' . $_POST['email'] . '>';
			$mailer->body = $_POST['message'];
			
			// Send mail
			$mailer->sendMail();
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
				
				// Captcha
				if ( $field == 'captcha' && $_SESSION[ 'CaptchaString' ] != $_POST[ 'captcha' ] ) {
					
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
		 * Get form error
		 * 
		 * @param		$id					The id of the POST data
		 * @return		The error text if any
		 */
		function getError($id) {
			
			// Check error
			if (array_key_exists($id,$this->errors)) {
				
				// Captcha
				if ( $id == 'captcha' ) {
					
					// Return error message
					return $GLOBALS['DIV']->wrap($this->LL->getLL('error.captcha') . '<br />','span',array('class'=>'error'));
				}
				
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
		 * Check for spam
		 * 
		 * @return		Boolean
		 */
		function checkSpam() {
			
			// Check if the form was submitted as POST
			if($_SERVER['REQUEST_METHOD'] != 'POST') {
				
				// Spam
				return false;
			}
			
			// Check host
			if(!strstr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])) {
				
				// Spam
				return false;
			}
			
			// Header injection detection
			$badStrings = array(
				'Content-Type:',
				'MIME-Version:',
				'Content-Transfer-Encoding:',
				'bcc:',
				'cc:'
			);
			
			// Check POST data
			foreach($_POST as $key=>$value) {
				
				// Process bad strings
				foreach($badStrings as $str) {
					
					// Detect bad strings
					if(ereg($str,$value)) {
						
						// Spam
						return false;
					}
				}
			}
			
			// No spam detected
			return true;
		}
	}
?>
