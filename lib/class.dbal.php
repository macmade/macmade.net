<?php
	
	/**
	 * Database abstraction layer.
	 * 
	 * @author		Jean-David Gadina (info@macmade.net)
	 * @version		1.0
	 */
	
	/**
	 * [CLASS/FUNCTION INDEX OF SCRIPT]
	 * 
	 * SECTION:		1 - MAIN
	 *      43:		function db_connect
	 *      54:		function db_close
	 *      67:		function db_insert($table,$fields)
	 *      90:		function db_update($table,$uid,$fields)
	 *     116:		function db_delete($table,$uid)
	 *     136:		function db_select($table,$fields='*',$where=false,$orderBy=false,$limit=false,$deleteClause=1)
	 *     177:		function quoteArray($array)
	 *     208:		function quoteStr($str)
	 * 
	 *				TOTAL FUNCTIONS: 8
	 */
	
	class dbal {
		
		
		
		
		
		/***************************************************************
		 * SECTION 1 - MAIN
		 *
		 * Functions for the initialization of the class.
		 ***************************************************************/
		
		/**
		 * Open database connection.
		 * 
		 * @return		Void
		 */
		function db_connect() {
			
			// Create connection
			$this->db = mysql_connect($GLOBALS['conf']['db_host'],$GLOBALS['conf']['db_user'],$GLOBALS['conf']['db_pwd']);
			
			mysql_select_db($GLOBALS['conf']['db'],$this->db);
		}
		
		/**
		 * Close database connection.
		 * 
		 * @return		Void
		 */
		function db_close() {
			
			// Close connection
			mysql_close($this->db);
		}
		
		/**
		 * MySQL INSERT instruction.
		 * 
		 * @param		$table				The database table
		 * @param		$fields				The fields to insert, as an array with key/value pairs
		 * @return		The MySQL ressource
		 */
		function db_insert($table,$fields) {
			
			// Field names
			$keys = array_keys($fields);
			
			// Field values
			$values = $this->quoteArray($fields);
			
			// Build query
			$query = 'INSERT INTO ' . $table . ' (' . implode(',',$keys) . ') VALUES (' . implode(',',$values) . ')';
			
			// Execute query
			return mysql_query($query);
		}
		
		/**
		 * MySQL UPDATE instruction.
		 * 
		 * @param		$table				The database table
		 * @param		$uid				The uid of the record to update
		 * @param		$fields				The fields to insert, as an array with key/value pairs
		 * @return		The MySQL ressource
		 */
		function db_update($table,$uid,$fields) {
			
			// Storage
			$updateFields = array();
			
			// Process each fields
			foreach($fields as $key=>$val) {
				
				// Create instruction
				$updateFields[] = $key . '=' . $this->quoteStr($val);
			}
			
			// Build query
			$query = 'UPDATE ' . $table . ' SET ' . implode(',',$updateFields) . ' WHERE uid=' . $uid;
			
			// Execute query
			return mysql_query($query);
		}
		
		/**
		 * Delete a record (set delete flag).
		 * 
		 * @param		$table				The database table
		 * @param		$uid				The uid of the record to delete
		 * @return		The MySQL ressource
		 */
		function db_delete($table,$uid) {
			
			// Build query
			$query = 'UPDATE ' . $table . ' SET deleted=1 WHERE uid=' . $uid;
			
			// Return MySQL ressource
			return mysql_query($query);
		}
		
		/**
		 * MySQL SELECT instruction.
		 * 
		 * @param		$table				The database table
		 * @param		$fields				The fields to select (comma list)
		 * @param		$where				An optionnal WHERE clause
		 * @param		$orderBy			An optionnal ORDER BY clause
		 * @param		$orderBy			An optionnal LIMIT clause
		 * @param		$deleteClause		Don't select records with a delete flag
		 * @return		The MySQL ressource
		 */
		function db_select($table,$fields='*',$where=false,$orderBy=false,$limit=false,$deleteClause=1) {
			
			// Build query
			$query = 'SELECT ' . $fields . ' FROM ' . $table;
			
			// WHERE elements storage
			$whereItems = array();
			
			// Check for a delete clause
			if ($deleteClause) {
				
				// Add delete clause
				$whereItems[] = 'deleted=0';
			}
			
			// Check for a WHERE clause
			if ($where) {
				
				// Add delete clause
				$whereItems[] = $where;
			}
			
			// MySQL WHERE clause
			$whereClause = (count($whereItems)) ? ' WHERE ' . implode(' AND ',$whereItems) : '';
			
			// MySQL ORDER BY clause
			$orderClause = ($orderBy) ? ' ORDER BY ' . $orderBy : '';
			
			// MySQL LIMIT clause
			$limitClause = ($limit) ? ' LIMIT ' . $limit : '';
			
			// Return MySQL ressource
			return mysql_query($query . $whereClause . $orderClause . $limitClause);
		}
		
		/**
		 * Protect an array for database.
		 * 
		 * @param		$array				The input array
		 * @return		The protected array
		 */
		function quoteArray($array) {
			
			// Storage
			$values = array();
			
			// Process each value
			foreach($array as $val) {
				
				// Check value
				if (is_string($val)) {
					
					// Escape value
					$values[] = '\'' . addslashes($val) . '\'';
					
				} else if (is_int($val)) {
					
					// Void item
					$values[] = $val;
					
				} else {
					
					// Void item
					$values[] = '\'\'';
				}
			}
			
			// Return values
			return $values;
		}
		
		/**
		 * Protect an string for database.
		 * 
		 * @param		$str				The input array
		 * @return		The protected string
		 */
		function quoteStr($str) {
			
			// Check value
			if (is_string($str)) {
				
				// Escape value
				$value = '\'' . addslashes($str) . '\'';
				
			} else {
				
				// Void item
				$value = '\'\'';
			}
			
			// Return value
			return $value;
		}
	}
?>
