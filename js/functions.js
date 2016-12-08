// <![CDATA[
	
	/**
	 * Character code encryption.
	 * 
	 * This method shifts the input character code with the specified offset,
	 * within a given character range. Based on TYPO3 method encryptCharCode
	 * of class tslib_fe, by Kasper Skårhøj.
	 * 
	 * @param       int         charCode        The input character code
	 * @param       int         start           The starting character code for the range
	 * @param       int         end             The ending character code for the range
	 * @param       int         offset          The offset for the encryption
	 * @return      int         The encrypted character code
	 */
	function cryptCharCode( charCode, start, end, offset ) {
		
		// Add offset to character
		charCode += offset;
		
		// Check offset and range
		if ( offset > 0 && charCode > end ) {
			
			// Compute new character
			charCode = start + ( charCode - end - 1 );
			
		} else if ( offset < 0 && charCode < start ) {
			
			// Compute new character
			charCode = end - ( start - charCode - 1 );
		}
		
		// Return new character
		return charCode;
	}
	
	/**
	 * Encrypt / Decrypt an email address
	 * 
	 * This method is used to encrypt / decrypt and email address,
	 * by shifting each character inside its range, in order to prevent
	 * spammers to get the address.  Based on TYPO3 method encryptEmail
	 * of class tslib_fe, by Kasper Skårhøj.
	 * 
	 * @param       string      email           The email to encrypt / decrypt
	 * @param       boolean     reverse         Encryption process direction ( 0 = crypt / 1 = decrypt )
	 * @return      string      The encrypted / decrypted email
	 */
	function cryptEmail( email, reverse ) {
			
		// Storage
		crypt = '';
		
		// Process each character of the input email
		for ( i = 0; i < email.length; i++ ) {
			
			// Store current character
			charValue = email.charAt( i );
			
			// Get character ASCII value
			charCode = email.charCodeAt( i );
			
			// Check ASCII range
			if ( charCode >= 33 && charCode <= 126 ) {
					
				// Offset for encryption / decryption
				offset = ( reverse ) ? -1 : 1;
				
				// Crypt character
				charValue = String.fromCharCode( cryptCharCode( charCode, 33, 126, offset ) );
			}
			
			// Add character
			crypt = crypt + charValue;
		}
		
		// Return encrypted / decrypted email
		return crypt;
	}
	
	/**
	 * Decrypt an email address
	 * 
	 * @param       string      email           The email to decrypt
	 * @return      null
	 */
	function decryptEmail( email ) {
		
		// Decrypt mail
		location.href = cryptEmail( email, true );
	}
	
// ]]>
