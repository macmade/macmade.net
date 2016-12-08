<?php
	
	/**
	 * Utilities.
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *      51:		function wrap($content,$tag='div',$params=array())
	 *      81:		function writeTagParams($params)
	 *     121:		function numForm($number,$decimals=false,$positive=false)
	 *     160:		function xml2array($data,$keepAttribs=1,$caseFolding=0,$skipWhite=0,$prefix=false,$numeric='n',$index='index',$type='type',$base64='base64',$php5defCharset='iso-8859-1')
	 *     415:		function array2xml($input,$xmlRoot='phpArray',$prefix='',$numeric='item',$numericAsAttribute='index',$addArrayAttribute='type',$xmlDeclaration=1,$encoding='iso-8859-1',$version='1.0',$standalone='yes',$doctype=false,$newLine=10,$indent=9,$level=0)
	 *     653:		function formatXHTML($xhtml,$uppercase=0,$newLine=10,$indent=9,$level=0)
	 *     774:		function checkArrayKeys($array,$keys,$allowEmpty=false,$checkType=false)
	 *     836:		function isType($var,$type)
	 *     864:		function htmlEncode($input,$htmlspecialchars=true,$htmlentities=true,$utf8decode=true)
	 *     909:		function viewArray($array,$indent=0)
	 *     998:		function debug($variable,$header='DEBUG')
	 * 
	 *				TOTAL FUNCTIONS: 11
	 */
	
	class utils {
		
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		/**
		 * Wrap content.
		 * 
		 * This function wraps some content in an HTML tag.
		 * 
		 * @param		$content			The content to wrap
		 * @param		$tag				The HTML tag to procuce
		 * @param		$params				An array with the HTML tag parameters, as key/value pairs
		 * @return		The wrapped content
		 */
		function wrap($content,$tag='div',$params=array()) {
			
			// Storage
			$htmlCode = array();
			
			// Tag parameters
			$tagParams = $this->writeTagParams($params);
			
			// Start
			$htmlCode[] = '<' . $tag . (($tagParams) ? ' ' . $tagParams : '') . '>';
			
			// Content
			$htmlCode[] = $content;
			
			// End
			$htmlCode[] = '</' . $tag . '>';
			
			// Return code
			return implode('',$htmlCode);
		}
		
		/**
		 * Write tag parameters.
		 * 
		 * This function write, from an array, every given key, with it's value, as an
		 * HTML tag parameter.
		 * 
		 * @param		$params				An array with the tag parameters as key/value pairs
		 * @return		A string with all tag parameters formatted as HTML
		 */
		function writeTagParams($params) {
			
			// Check arguments
			if (is_array($params) && count($params)) {
				
				// Parameters storages
				$tagParams = array();
				
				// Process each parameter
				foreach($params as $key=>$value) {
					
					// Check for a real value
					if (!empty($value) || $value === '0') {
						
						// Store parameter
						$tagParams[] = $key . '="' . $value . '"';
						
					} else {
						
						// Store parameter
						$tagParams[] = $key;
					}
				}
				
				// Return parameters
				return implode(' ',$tagParams);
			}
		}
		
		/**
		 * Format a number.
		 * 
		 * This function is used to format a number. Configuration is taken
		 * from the global configuration array.
		 * 
		 * @param		$number				The number to format (numeric)
		 * @param		$decimals			The number of decimals to keep (will override parent object configuration)
		 * @param		$positive			Add a plus sign if the number is positive
		 * @return		The formatted number
		 */
		function numForm($number,$decimals=false,$positive=false) {
			
			// Check for a number
			if (is_numeric($number)) {
				
				// Decimals
				$float = ($decimals) ? $decimals : $GLOBALS['conf']['decimals'];
				
				// Add plus sign?
				$plus = ($positive && $number > 0) ? '+' : '';
				
				// Format number
				return $plus . number_format($number,$float,$GLOBALS['conf']['sepDecimals'],$GLOBALS['conf']['sepThousands']);
				
			} else {
				
				// Return unformatted number
				return $number;
			}
		}
		
		/**
		 * Convert XML data to an array.
		 * 
		 * This function is used to convert an XML data to a multi-dimensionnal array,
		 * representing the structure of the data.
		 * 
		 * @param		$data				The XML data to process
		 * @param		$keepAttribs		If set, also includes the tag attributes in the array (with key 'xml-attribs')
		 * @param		$caseFolding		XML parser option: case management
		 * @param		$skipWhite			XML parser option: white space management
		 * @param		$prefix				A tag prefix to remove
		 * @param		$numeric			Keep only the numeric value for a tag prefixed with this argument (default is 'n')
		 * @param		$index				Set the tag name to an alternate value found in the tag arguments (default is 'index')
		 * @param		$type				Force the tag value to a special type, found in the tag arguments (default is 'type')
		 * @param		$base64				Decode the tag value from base64 if the specified tag argument is present (default is 'base64')
		 * @param		$php5defCharset		The default charset to use with PHP5
		 * @return		An array with the XML structure, or an XML error message if the data is not valid
		 */
		function xml2array($data,$keepAttribs=1,$caseFolding=0,$skipWhite=0,$prefix=false,$numeric='n',$index='index',$type='type',$base64='base64',$php5defCharset='iso-8859-1') {
			
			// Storage
			$xml = array();
			$xmlValues = array();
			$xmlIndex = array();
			$stack = array(array());
			
			// Counter
			$stackCount = 0;
			
			// New XML parser
			$parser = xml_parser_create();
			
			// Case management option
			xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,$caseFolding);
			
			// White space management option
			xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,$skipWhite);
			
			// Support for PHP5 charset detection
			if ((double) phpversion() >= 5) {
				
				// Find the encoding parameter in the XML declaration
				ereg('^[[:space:]]*<\?xml[^>]*encoding[[:space:]]*=[[:space:]]*"([^"]*)"',substr($data,0,200),$result);
				
				// Check result
				if (isset($result[1])) {
					
					// Charset found in the XML declaration
					$charset = $result[1];
				
				} else {
					
					// Default charset
					$charset = $php5defCharset;
				}
				
				// Charset management option
				xml_parser_set_option($parser,XML_OPTION_TARGET_ENCODING,$charset);
			}
			
			// Parse XML structure
			xml_parse_into_struct($parser,$data,$xmlValues,$xmlIndex);
			
			// Error in XML
			if (xml_get_error_code($parser)) {
				
				// Error
				$error = 'XML error: ' . xml_error_string(xml_get_error_code($parser)) . ' at line ' . xml_get_current_line_number($parser);
				
				// Free XML parser
				xml_parser_free($parser);
				
				// Return error
				return $error;
				
			} else {
				
				// Free XML parser
				xml_parser_free($parser);
				
				// Counter for multiple same keys
				$sameKeyCount = array();
				
				// Process each value
				foreach($xmlValues as $key=>$val) {
					
					// Get the tag name (without prefix if specified)
					$tagName = ($prefix && substr($val['tag'],0,strlen($prefix)) == $prefix) ? substr($val['tag'],strlen($prefix)) : $val['tag'];
					
					// Support for numeric tags (<nXXX>)
					$numTag = (substr($tagName,0,1) == $numeric) ? substr($tagName,1) : false;
					
					// Check if tag is a real numeric value
					if ($numTag && !strcmp(intval($numTag),$numTag)) {
						
						// Store only numeric value
						$tagName = intval($numTag);
					}
					
					// Support for alternative value
					if (array_key_exists('attributes',$val) && is_array($val['attributes']) && array_key_exists($index,$val['attributes']) && strlen($val['attributes'][$index])) {
						
						// Store alternate value
						$tagName = $val['attributes'][$index];
					}
					
					// Check if array key already exists
					if (array_key_exists($tagName,$xml)) {
						
						// Check if the current level has already a key counter
						if (!isset($sameKeyCount[$val['level']])) {
							
							// Create array
							$sameKeyCount[$val['level']] = 0;
						}
						
						// Increase key counter
						$sameKeyCount[$val['level']]++;
						
						// Change tag name to avoid overwriting existing values
						$tagName = $tagName . '-' . $sameKeyCount[$val['level']];
					}
					
					// Check tag type
					switch($val['type']) {
						
						// Open tag
						case 'open':
							
							// Storage
							$xml[$tagName] = array();
							
							// Memorize content
							$stack[$stackCount++] = $xml;
							
							// Reset main storage
							$xml = array();
							
							// Support for tag attributes
							if ($keepAttribs && array_key_exists('attributes',$val)) {
								
								// Store attributes
								$xml['xml-attribs'] = $val['attributes'];
							}
							
						break;
						
						// Close tag
						case 'close':
							
							// Memorize array
							$tempXML = $xml;
							
							// Decrease the stack counter
							$xml = $stack[--$stackCount];
							
							// Go to the end of the array
							end($xml);
							
							// Add temp array
							$xml[key($xml)] = $tempXML;
							
							// Unset temp array
							unset($tempXML);
							
							// Unset key counters for the child level
							unset($sameKeyCount[$val['level'] + 1]);
							
						break;
						
						// Complete tag
						case 'complete':
							
							// Check for base64
							if (array_key_exists('attributes',$val) && array_key_exists('base64',$val['attributes'])) {
								
								// Decode value
								$xml[$tagName] = base64_decode($val['value']);
							
							} else {
								
								// Add value (force string)
								$xml[$tagName] = (string) (array_key_exists('value',$val)) ? $val['value'] : '';
								
								// Check for attributes
								if (array_key_exists('attributes',$val) && array_key_exists($type,$val['attributes'])) {
									
									// Support for value types
									switch((string)$val['attributes'][$type]) {
										
										// Integer
										case 'integer':
											
											// Force variable type
											$xml[$tagName] = (integer) $xml[$tagName];
											
										break;
										
										// Double
										case 'double':
											
											$xml[$tagName] = (double) $xml[$tagName];
										
										break;
										
										// Boolean
										case 'boolean':
											
											// Force type
											$xml[$tagName] = (bool) $xml[$tagName];
										
										break;
										
										// Array
										case 'array':
											
											// Create an empty array
											$xml[$tagName] = array();
										
										break;
									}
								}
							}
							
							// Support for tag attributes
							if ($keepAttribs && array_key_exists('attributes',$val)) {
								
								// Memorize tag value
								$tempTagValue = $xml[$tagName];
								
								// New array with value
								$xml[$tagName] = array('xml-value'=>$tempTagValue);
								
								// Store attributes
								$xml[$tagName]['xml-attribs'] = $val['attributes'];
								
								// Unset memorized value
								unset($tempTagValue);
							}
							
						break;
					}
				}
				
				// Return the array of the XML root element
				return $xml;
			}
		}
		
		/**
		 * Convert an array to XML.
		 * 
		 * This function is used to convert a multi-dimensionnal array to XML code. This is the
		 * reverse function of div_xml2array().
		 * 
		 * SPECIAL NOTE: This function can be called without the API class instantiated.
		 * 
		 * @param		$input				The array to process
		 * @param		$xmlRoot			The name of the XML root element
		 * @param		$prefix				A prefix for the tag names
		 * @param		$numeric			The prefix for numeric keys
		 * @param		$numericAsAttribute	Use an XML attribute to store numeric keys
		 * @param		$addArrayAttribute	Add an XML attribute if the array value is an array
		 * @param		$xmlDeclaration		Include XML declaration
		 * @param		$encoding			XML declaration parameter: encoding
		 * @param		$version			XML declaration parameter: version
		 * @param		$standalone			XML declaration parameter: standalone
		 * @param		$doctype			The URL of the doctype
		 * @param		$newLine			The new line character to use (through chr())
		 * @param		$indent				The indentation character to use (through chr())
		 * @param		$level				The level processed. Don't touch this, as it's used for the correct code indentation
		 * @return		An XML string
		 */
		function array2xml($input,$xmlRoot='phpArray',$prefix='',$numeric='item',$numericAsAttribute='index',$addArrayAttribute='type',$xmlDeclaration=1,$encoding='iso-8859-1',$version='1.0',$standalone='yes',$doctype=false,$newLine=10,$indent=9,$level=0) {
			
			// Function ID
			$funcId = 'div_array2xml';
			
			// Key for XML attributes
			$attribs = 'xml-attribs';
			
			// Key for single value stored in a sub-array
			$valueOnly = 'xml-value';
			
			// Check arguments
			if (is_array($input)) {
				
				// Storage
				$xml = array();
				
				// Include XML declaration?
				if ($xmlDeclaration && $level == 0) {
					
					// XML declaration
					$xml[] = '<?xml version="' . $version . '" encoding="' . $encoding . '" standalone="' . $standalone . '"?' . '>';
				}
				
				// Doctype?
				if ($doctype && $level == 0) {
					
					// XML declaration
					$xml[] = '<!DOCTYPE ' . $xmlRoot . ' SYSTEM "' . $doctype . '" >';
				}
				
				// Start root element
				if ($level == 0) {
					
					// Storage
					$rootAttribs = array('');
					
					// Root element attributes?
					if (array_key_exists($attribs,$input) && is_array($input[$attribs])) {
						
						// Process attributes
						foreach($input[$attribs] as $attrName=>$attrValue) {
							
							// Add attribute
							$rootAttribs[] = $attrName . '="' . $attrValue . '"';
						}
					}
					
					// Write tag
					$xml[] = '<' . $prefix . $xmlRoot . implode(' ',$rootAttribs) . '>';
				}
				
				// Code indentation
				$codeIndents = '';
				
				// Adds necessary indentations
				for ($i = 0; $i < ($level + 1); $i++) {
					
					// Add indentation character
					$codeIndents .= chr($indent);
				}
				
				// Process array elements
				foreach($input as $tagName=>$tagValue) {
					
					// Don't process arguments array
					if ((string)$tagName != $attribs) {
						
						// Check if tag name begins with xml
						if (strtolower(substr($tagName,0,3)) == 'xml') {
							
							// Remove XML prefix
							$tagName = substr($tagName,3);
						}
						
						// Check if tag name begins with a number
						if (is_numeric(substr($tagName,0,1))) {
							
							// Check how to handle numeric tags (attribute or prefix)
							if ($numericAsAttribute) {
								
								// Numeric attribute
								$numKey = (string)$tagName;
								
								// Tag name
								$tagName = $numeric;
								
								// Add flag to add numeric attribute
								$isNum = 1;
								
							} else {
								
								// Add prefix
								$tagName = $numeric . $tagName;
							}
						} else {
							
							// Reset variables
							$numKey = false;
							$isNum = false;
						}
						
						// Check if tag name contains a space
						if (strstr($tagName,' ')) {
							
							// Replace space
							$tagName = str_replace(' ','_',$tagName);
						}
						
						// Check if tag name contains an equal sign
						if (strstr($tagName,'=')) {
							
							// Replace space
							$tagName = str_replace('=','_',$tagName);
						}
						
						// Remove numeric suffic in tag names if present
						$tagName = ereg_replace('-[0-9]+','',$tagName);
						
						// Check for numeric attribute
						if ($isNum) {
							
							// Set attribute
							$fixedAttribs = ' ' . $numericAsAttribute . '="' . $numKey . '"';
							
						} else {
							
							// Reset fixed attributes
							$fixedAttribs = false;
						}
						
						// Check for sub arrays
						if (is_array($tagValue)) {
							
							// Storage
							$elAttribs = array('');
							
							// Add array attribute?
							if ($addArrayAttribute) {
								
								// Add attribute
								$elAttribs[] = $addArrayAttribute . '="array"';
							}
							
							// Element attributes?
							if (array_key_exists($attribs,$tagValue) && is_array($tagValue[$attribs])) {
								
								// Process attributes
								foreach($tagValue[$attribs] as $attrName=>$attrValue) {
									
									// Add attribute
									$elAttribs[] = $attrName . '="' . $attrValue . '"';
								}
								
								// Remove attributes array for further processing
								unset($tagValue[$attribs]);
							}
							
							// Check for a value
							if (count($tagValue)) {
								
								// Check for a single value stored in a sub array
								if (array_key_exists('xml-value',$tagValue)) {
									
									// Add single value
									$elValue = $tagValue['xml-value'];
									
								} else {
								
									// Process sub arrays
									$elValue = chr($newLine) . utils::array2xml($tagValue,$xmlRoot,$prefix,$numeric,$numericAsAttribute,$addArrayAttribute,$xmlDeclaration,$encoding,$version,$standalone,$doctype,$newLine,$indent,$level + 1) . chr($newLine) . $codeIndents;
								}
								
								// Write tag
								$xml[] = $codeIndents . '<' . $prefix . $tagName . $fixedAttribs . implode(' ',$elAttribs) . '>' . $elValue . '</' . $prefix . $tagName . '>';
							
							} else {
								
								// Empty tag
								$xml[] = $codeIndents . '<' . $prefix . $tagName . $fixedAttribs . implode(' ',$elAttribs) . ' />';
							}
						} else {
							
							// Check for a value
							if ($tagValue) {
								
								// Check if value must be protected
								if (strstr($tagValue,'&') || strstr($tagValue,'<')) {
									
									// Protect with CDATA
									$elValue = '<![CDATA[' . $tagValue . ']]>';
									
								} else {
									
									// Don't protect
									$elValue = $tagValue;
								}
								
								// Write tag
								$xml[] = $codeIndents . '<' . $prefix . $tagName . $fixedAttribs . '>' . $elValue . '</' . $prefix . $tagName . '>';
								
							} else {
								
								// Empty tag
								$xml[] = $codeIndents . '<' . $prefix . $fixedAttribs . $tagName . ' />';
							}
						}
					}
				}
				
				// End root element
				if ($level == 0) {
					$xml[] = '</' . $prefix . $xmlRoot . '>';
				}
				
				// Return XML code
				return implode(chr($newLine),$xml);
			}
		}
		
		/**
		 * Reformat XHTML code.
		 * 
		 * This function is used to reformat XHTML code, with linebreaks and indentations.
		 * The code passed to this function MUST be XHTML compliant in order to be reformatted,
		 * as it will be parsed as XML! If this is not the case, the original code is return.
		 * Also note that if you have mixed content inside a tag (eg. cData & tags), the cData
		 * won't be preserved, as it will be recognized as junk data by the XML parser!
		 * 
		 * @param		$html				The original XHTML code
		 * @param		$uppercase			Render XHTML tags in uppercase
		 * @param		$newLine			The new line character to use (through chr())
		 * @param		$indent				The indentation character to use (through chr())
 		 * @param		$level				The level processed. Don't touch this, as it's used for the correct code indentation
		 * @return		The reformatted HTML code
		 * @see			xml2array
		 * @see			writeTagParams
		 */
		function formatXHTML($xhtml,$uppercase=0,$newLine=10,$indent=9,$level=0) {
			
			// Check if the parsing process has already be done
			if (is_array($xhtml)) {
				
				// Code storage
				$code = array();
				
				// Code indentation
				$codeIndents = '';
				
				// Adds necessary indentations
				for ($i = 0; $i < ($level); $i++) {
					
					// Add indentation character
					$codeIndents .= chr($indent);
				}
				
				// Process each XHTML tag
				foreach($xhtml as $key=>$value) {
					
					// Create tag name
					$tagName = ($uppercase) ? strtoupper($key) : strtolower($key);
					
					// Remove numeric suffic in tag names if present
					$tagName = ereg_replace('-[0-9]+','',$tagName);
					
					// Check if value is an array
					if (is_array($value)) {
						
						// XHTML tag attributes storage
						$tagAttribs = '';
						
						// Check for XHTML attributes
						if (array_key_exists('xml-attribs',$value)) {
							
							// Write tag attributes
							$tagAttribs = ' ' . $this->writeTagParams($value['xml-attribs']);
							
							// Remove attributes from parent array
							unset($value['xml-attribs']);
						}
						
						// Check for tag type
						if (!isset($value) || (array_key_exists('xml-value',$value) && empty($value['xml-value']))) {
							
							// Write empty tag
							$code[] = $codeIndents . '<' . $tagName . $tagAttribs . ' />';
							
						} else if (array_key_exists('xml-value',$value)) {
							
							// Write complete XHTML tag
							$code[] = $codeIndents . '<' . $tagName . $tagAttribs . '>' . $value['xml-value'] . '</' . $tagName . '>';
							
						} else {
							
							// Write complete XHTML tag with child tags
							$code[] = $codeIndents . '<' . $tagName . $tagAttribs . '>';
							$code[] = $this->formatXHTML($value,$uppercase,$newLine,$indent,$level + 1);
							$code[] = $codeIndents . '</' . $tagName . '>';
						}
					} else {
						
						// Check for empty tags
						if (!$value) {
							
							// Write empty tag
							$code[] = $codeIndents . '<' . $tagName . ' />';
							
						} else {
							
							// Write complete XHTML tag
							$code[] = $codeIndents . '<' . $tagName . '>' . $value . '</' . $tagName . '>';
						}
					}
				}
				
				// Return HTML code
				return implode(chr($newLine),$code);
				
			} else {
				
				// Replace new lines and tabs
				$new_xhtml = str_replace(chr(10),'',$xhtml);
				$new_xhtml = str_replace(chr(9),'',$new_xhtml);
				
				// Add root element to avoid XML errors
				$data = '<xml-root>' . $new_xhtml . '</xml-root>';
				
				// Try to convert XHTML code in an array
				$htmlArray = $this->xml2array($data);
				
				// Check for a real array
				if (is_array($htmlArray)) {
					
					// Begin to reformat HTML code
					return $this->formatXHTML($htmlArray['xml-root'],$uppercase,$newLine,$indent,0);
					
				} else {
					
					// Not valid XHTML - Return unformatted code
					return $xhtml;
				}
			}
		}
		
		/**
		 * Check keys in a multidimensionnal array
		 * 
		 * This function is used to check for specific keys in a
		 * multidimensionnal array.
		 * 
		 * SPECIAL NOTE: This function can be called without the API class instantiated.
		 * 
		 * @param		$array				The input array
		 * @param		$keys				The keys to check for, as a commalist representing the array hierarchy
		 * @param		$allowEmpty			If this is set, the function returns true even if the final array item has an empty value
		 * @param		$checkType			The variable type to check for in the final array (array,bool,double,finite,float,int,long,nan,null,numeric,object,real,scalar,string)
		 * @return		Boolean
		 * @see			div_isType
		 */
		function checkArrayKeys($array,$keys,$allowEmpty=false,$checkType=false) {
			
			// Check variables
			if (is_array($array) && count($array)) {
				
				// Create an array with keys
				$check = explode(',',$keys);
				
				// Check key array
				if (is_array($check) && count($check)) {
					
					// Last key
					$lastKey = $check[count($check) - 1];
					
					// Process keys
					foreach($check as $key) {
						
						// Check key in array
						if ($key == $lastKey && array_key_exists($key,$array)) {
							
							// Check type
							if (!$checkType || $this->isType($array[$key],$checkType)) {
								
								// Allow empty values in last key?
								if ($allowEmpty) {
									
									// Key exists
									return true;
									
								} else if (!empty($array[$key])) {
									
									// Key exists and has value
									return true;
								}
							}
						} else if (array_key_exists($key,$array)) {
							
							// Replace array with sub element
							$array = $array[$key];
							
						} else {
							
							// Key not found
							break;
						}
					}
				}
			}
		}
		
		/**
		 * Check a variable type
		 * 
		 * This function is used to check the type of a variable, without using
		 * the PHP gettype() function, which should never be used to check a variable type.
		 * 
		 * SPECIAL NOTE: This function can be called without the API class instantiated.
		 * 
		 * @param		$var				The variable to check
		 * @param		$type				The type to check for (array,bool,double,finite,float,int,long,nan,null,numeric,object,real,scalar,string)
		 * @return		Boolean
		 */
		function isType($var,$type) {
			
			// Function name
			$funcName = 'is_' . $type;
			
			// Check function
			if (function_exists($funcName)) {
				
				// Check type and return result
				#return call_user_func($funcName,$var);
				
				// Faster (thanx Stef) - Check compatibility
				return $funcName($var);
			}
		}
		
		/**
		 * Prepare data for HTML output
		 * 
		 * This function process a string, or each string in an array, and makes it
		 * ready for an HTML output.
		 * 
		 * @param		$input				The input (a string or an array)
		 * @param		$htmlspecialchars	Protect strings with HTML special characters
		 * @param		$htmlentities		Protect strings with HTML entities
		 * @param		$utf8decode			Decode UTF 8 strings
		 * @param		$stripslashes		Strip slashes
		 * @return		The input ready for HTML output
		 */
		function htmlEncode($input,$htmlspecialchars=true,$htmlentities=true,$utf8decode=true,$stripslashes=true,$ampersands=true) {
			
			// Check input type
			if (is_array($input)) {
				
				// Process array
				foreach($input as $key=>$value) {
					
					// UTF 8
					$input[$key] = ($utf8decode) ? utf8_decode($value) : $value;
					
					// HTML entities
					$input[$key] = ($htmlentities) ? htmlentities($value) : $value;
					
					// HTML special characters
					$input[$key] = ($htmlspecialchars) ? htmlspecialchars($value) : $value;
					
					// Stripslashes
					$input[$key] = ($stripslashes) ? stripslashes($value) : $value;
				}
				
			} else {
				
				// UTF 8
				$input = ($utf8decode) ? utf8_decode($input) : $input;
				
				// HTML entities
				$input = ($htmlentities) ? htmlentities($input) : $input;
				
				// HTML special characters
				$input = ($htmlspecialchars) ? htmlspecialchars($input) : $input;
				
				// Stripslashes
				$input = ($stripslashes) ? stripslashes($input) : $input;
			}
			
			// Return input
			return $input;
		}
		
		/**
		 * Character code encryption.
		 * 
		 * This method shifts the input character code with the specified offset,
		 * within a given character range. Based on TYPO3 method encryptCharCode
		 * of class tslib_fe, by Kasper Skårhøj.
		 * 
		 * @param       int         $charCode       The input character code
		 * @param       int         $start          The starting character code for the range
		 * @param       int         $end            The ending character code for the range
		 * @param       int         $offset         The offset for the encryption
		 * @return      int         The encrypted character code
		 */
		function cryptCharCode( $charCode, $start, $end, $offset ) {
			
			// Add offset to character
			$charCode += $offset;
			
			// Check offset and range
			if ( $offset > 0 && $charCode > $end ) {
				
				// Compute new character
				$charCode = $start + ( $charCode - $end - 1 );
				
			} else if ( $offset < 0 && $charCode < $start ) {
				
				// Compute new character
				$charCode = $end - ( $start - $charCode - 1 );
			}
			
			// Return new character
			return $charCode;
		}
		
		/**
		 * Encrypt / Decrypt an email address
		 * 
		 * This method is used to encrypt / decrypt and email address,
		 * by shifting each character inside its range, in order to prevent
		 * spammers to get the address.  Based on TYPO3 method encryptEmail
		 * of class tslib_fe, by Kasper Skårhøj.
		 * 
		 * @param       string      $email          The email to encrypt / decrypt
		 * @param       boolean     $reverse        Encryption process direction ( 0 = crypt / 1 = decrypt )
		 * @return      string      The encrypted / decrypted email
		 */
		function cryptEmail( $email, $reverse = false ) {
				
			// Storage
			$crypt = '';
			
			// Process each character of the input email
			for ( $i = 0; $i < strlen( $email ); $i++ ) {
				
				// Store current character
				$charValue = substr( $email, $i, $i + 1 );
				
				// Get character ASCII value
				$charCode = ord( $charValue );
				
				// Check ASCII range
				if ( $charCode >= 33 && $charCode <= 126 ) {
						
					// Offset for encryption / decryption
					$offset = ( $reverse ) ? -1 : 1;
					
					// Crypt character
					$charValue = chr( utils::cryptCharCode( $charCode, 33, 126, $offset ) );
				}
				
				// Add character
				$crypt .= $charValue;
			}
			
			// Return encrypted / decrypted email
			return $crypt;
		}
		
		/**
		 * 
		 */
		function linkEmail($email) {
			
			if (is_string($email)) {
				
				$href = 'mailto:' . $email;
				
				$crypt = utils::cryptEmail($href);
				
				$title = str_replace('@','(at)',$email);
				
				return '<a href="javascript:decryptEmail(\'' . $crypt . '\');" title="' . $title. '">' . $title . '</a>';
			}
		}
		
		/**
		 * Display an array as an HTML table.
		 * 
		 * This function display an HTML table representing the given array.
		 * Each item goes in a row, and keys/values in cols. If the array has
		 * sub array, they are processed as well.
		 * 
		 * @param		$array				The array to display
		 * @param		$indent				The indentation level (used for indenting the HTML code)
		 * @return		An HTML representation of the array
		 */
		function viewArray($array,$indent=0) {
			
			// Check if input is an array
			if (is_array($array) && count($array)) {
				
				// First level indent
				$indent_1 = str_pad(chr(9),$indent,chr(9));
				
				// Second level indent
				$indent_2 = str_pad(chr(9),$indent + 1,chr(9));
				
				// Third level indent
				$indent_3 = str_pad(chr(9),$indent + 2,chr(9));
				
				// Output storage
				$output = array();
				
				// Start HTML comment
				$output[] = $indent_1 . '<!-- [PHP ARRAY - BEGIN] !-->';
				
				// Start table
				$output[] = $indent_1 . '<table style="margin: 5px; background: #FFFFFF; border: solid 1px #666666; border-collapse: collapse;" border="0" width="100%" cellspacing="0" cellpadding="5" align="center">';
				
				// Process array
				foreach($array as $key=>$value) {
					
					// Start row
					$output[] = $indent_2 . '<tr>';
					
					// Key
					$output[] = $indent_3 . '<td style="background: #FAFAFA; border: dotted 1px #666666;" width="10%" align="left" valign="top"><span style="font-size: 10px; color: #666666">' . $key . '</span></td>';
					
					// Get value type
					$valueType = gettype($value);
					
					// Process value types
					switch($valueType) {
						
						// Array
						case 'array':
							$content = $this->viewArray($value,$indent + 3);
						break;
						
						// String
						case 'string':
							$content = '<span style="font-family: Helvetica, Arial, Verdana; font-size: 10px; color: #990000">' . nl2br(htmlspecialchars($value)) . '</span>';
						break;
						
						// Default
						default:
							$content = '<span style="font-family: Helvetica, Arial, Verdana; font-size: 10px; color: #006666">' . $value . '</span>';
						break;
					}
					
					// Empty values
					if (empty($value)) {
						$content = '<span style="font-family: Helvetica, Arial, Verdana; font-size: 10px; color: #FF3300">[EMPTY]</span>';
					}
					
					// Value
					$output[] = $indent_3 . '<td style="background: #FFFFFF; border: dotted 1px #666666;" width="90%" align="left" valign="top">' . $content . '</td>';
					
					// End row
					$output[] = $indent_2 . '</tr>';
				}
				
				// End table
				$output[] = $indent_1 . '</table>';
				
				// End HTML comment
				$output[] = $indent_1 . '<!-- [PHP ARRAY - END] !-->';
				
				// Return output
				return implode(chr(10),$output);
			}
		}
		
		/**
		 * Writes an PHP variable HTML representation.
		 * 
		 * This function produces an HTML representation of a PHP variable. If the
		 * variable is an array, the function viewArray is called.
		 * Otherwise, the object is printed.
		 * 
		 * @param		$variable			The variable to display
		 * @param		$header				The header of the debug zone
		 * @return		Void
		 * @see			viewArray
		 */
		function debug($variable,$header='DEBUG') {
			
			// Get variable type
			$variableType = gettype($variable);
			
			// Start div
			echo('<div style="margin: 5px; border: solid 1px #666666; padding: 10px; background: #FAFAFA">');
			
			// Check if variable is empty
			if (empty($variable)) {
				
				// Empty message
				echo('<h1 style="font-family: Helvetica, Arial, Verdana; font-size: 15px; color: #666666">[' . $header . ' - EMPTY]</h1>');
				
			} else {
				
				// Header
				echo('<h1 style="font-family: Helvetica, Arial, Verdana; font-size: 15px; color: #666666">[' . $header . ']</h1>');
				
				// Process object types
				switch($variableType) {
					
					// Array
					case 'array':
						
						// View array
						echo($this->viewArray($variable));
						
					break;
					
					// Object
					case 'object':
						
						// Start preformatted text
						echo('<pre style="font-size: 10px; color: #990000">');
						
						// Write object
						print_r($variable);
						
						// End preformatted text
						echo('</pre>');
						
					break;
					
					// String
					case 'string':
						
						// Write object
						echo('<span style="font-family: Helvetica, Arial, Verdana; font-size: 10px; color: #990000">' . nl2br(htmlentities($variable)) . '</span>');
						
					break;
					
					// Default
					default:
						
						// Write object
						echo('<span style="font-family: Helvetica, Arial, Verdana; font-size: 10px; color: #006666">' . $variable . '</span>');
						
					break;
				}
			}
			
			// End div
			echo('</div>');
		}
	}
?>
