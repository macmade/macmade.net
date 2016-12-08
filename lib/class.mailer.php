<?php
	
	/**
	 * Mailer.
	 * 
	 * This script is an adaptation of a code example taken in the
	 * "Professional PHP" book from Wrox (c).
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *	    52:		function mailer
	 *	    68:		function sendMail
	 *	    83:		function getMail($complete=true)
	 *	   142:		function buildMultipart
	 *	   171:		function buildMessage($part)
	 *	   194:		function addAttach($message,$name='',$ctype='application/octet-stream')
	 * 
	 *				TOTAL FUNCTIONS: 6
	 */
	
	class mailer {
		
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		var $parts;
		var $to;
		var $from;
		var $headers;
		var $subject;
		var $body;
		
		/**
		 * Class constructor.
		 * 
		 * @param		$pObj				The parent object
		 * @return		Void
		 */
		function mailer() {
			
			// Set internal data
			$this->parts = array();
			$this->to = '';
			$this->from = '';
			$this->subject = '';
			$this->body = '';
			$this->headers = '';
		}
		
		/**
		 * Send mail.
		 * 
		 * @return		Void
		 */
		function sendMail() {
			
			// Get mail message
			$mime = $this->getMail(false);
			
			// Send mail
			mail($this->to,$this->subject,'',$mime);
		}
		
		/**
		 * Get full mail message.
		 * 
		 * @param		$compltete			The mail state (boolean)
		 * @return		The complete message
		 */
		function getMail($complete=true) {
			
			// Storage
			$mime = array();
			
			// Check from
			if (!empty($this->from)) {
				
				// Add from
				$mime[] = 'From: ' . $this->from;
			}
			
			// Check headers
			if (!empty($this->headers)) {
				
				// Add headers
				$mime[] = $this->headers;
			}
			
			// Check message state
			if ($complete) {
				
				// Check recipient
				if (!empty($this->to)) {
					
					// Add recipient
					$mime[] = 'To: ' . $this->to;
				}
				
				// Check subject
				if (!empty($this->subject)) {
					
					// Add subject
					$mime[] = 'Subject: ' . $this->subject;
				}
			}
			
			// Check mail body
			if (!empty($this->body)) {
				
				// Add body
				$this->addAttach($this->body,'','text/plain');
			}
			
			// Add mime type
			$mime[] = 'MIME-Version: 1.0';
			
			// Build multipart
			$mime[] = $this->buildMultipart();
			
			// Return full mail
			return implode(chr(10),$mime);
		}
		
		/**
		 * Build a multipart mail.
		 * 
		 * @return		The multipart mail
		 */
		function buildMultipart() {
			
			// Message boundary
			$boundary = 'b' . md5(uniqid(time()));
			
			// Multipart flag
			$multipart = array(
				'Content-Type: multipart/mixed; boundary = ' . $boundary . chr(10) . chr(10) . 'This is a MIME encoded message.' . chr(10) . chr(10) . '--' . $boundary,
			);
			
			// Process parts
			for($i = sizeof($this->parts) - 1; $i >= 0; $i--) {
				
				// Add part
				$multipart[] = $this->buildMessage($this->parts[$i]) . '--' . $boundary;
			}
			
			// Return multipart
			return implode(chr(10),$multipart) . '--' . chr(10) . chr(10);
		}
		
		/**
		 * Build the message.
		 * 
		 * @param		$part				The message part
		 * @return		The message
		 */
		function buildMessage($part) {
			
			// Get and encode message
			$message = chunk_split(base64_encode($part['message']));
			
			// Encoding type
			$encoding =  'base64';
			
			// Full message
			$fullMessage = 'Content-Type: ' . $part['ctype'] . (($part['name']) ? '; name = \'' . $part['name'] . '\'' : '') . chr(10) . 'Content-Transfer-Encoding:' . $encoding . chr(10) . chr(10) . $message . chr(10);
			
			// Return full message
			return $fullMessage;
		}
		
		/**
		 * Add mail attachement.
		 * 
		 * @param		$message			The attachement
		 * @param		$name				The attachement name
		 * @param		$ctype				The attachement content type
		 * @return		Void
		 */
		function addAttach($message,$name='',$ctype='application/octet-stream') {
			
			// Add attachement
			$this->parts[] = array (
				
				// Content type
				'ctype' => $ctype,
				
				// Message
				'message' => $message,
				
				// Name
				'name' => $name,
			);
		}
	}
?>
