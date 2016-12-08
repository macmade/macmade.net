<?php
	
	/**
	 * T3FRUni2006 - People list
	 */
	class t3fruni2006_people {
		
		// Module name
		var $mod = 't3fruni2006';
		
		// Table
		var $table = 't3fruni2006_people';
		
		// Days
		var $days = array(
			'1' => '10/16/2006',
			'2' => '10/17/2006',
			'4' => '10/18/2006',
			'8' => '10/19/2006',
			'16' => '10/20/2006',
		);
		
		// People storage
		var $people = array();
		
		/**
		 * Class constructor
		 * 
		 * @return		Void
		 */
		function t3fruni2006_people() {
			
			// Create lang object
			$this->LL = new lang($this);
			
			// Select people
			$res = $GLOBALS['DB']->db_select($this->table);
			
			// Check DB result
			if ($res) {
				
				// Process people
				while($row = mysql_fetch_assoc($res)) {
					
					// Add user
					$this->people[] = $row;
				}
			}
		}
		
		/**
		 * Show registered users
		 * 
		 * @return		The users listing
		 */
		function showPeople() {
			
			// Check results
			if (count($this->people)) {
				
				// Storage
				$html = array();
				$users = array();
				
				// Counters
				$count = 0;
				$rows = 0;
				
				// Count people
				$peopleCount = count($this->people);
				
				// Process people
				foreach($this->people as $row) {
					
					// Increase counter
					$count++;
					$rows++;
					
					// Check counter
					if ($rows == 1) {
						
						// Start clearer DIV
						$users[] = '<div class="clearer">';
					}
					
					// User storage
					$user = array();
					
					// Prepare row for HTML output
					$row = $GLOBALS['DIV']->htmlEncode($row);
					
					// Name
					$user[] = $GLOBALS['DIV']->wrap($count . ') ' . $row['name_first'] . ' ' . $row['name_last'],'h3');
					
					// Start DIV
					$user[] = '<div>';
					
					// Add company
					$user[] = $GLOBALS['DIV']->wrap($this->LL->getLL('company'),'span',array('class'=>'strong')) . $row['company'] . '<br />';
				
					// Add company
					$user[] = $GLOBALS['DIV']->wrap($this->LL->getLL('nickname'),'span',array('class'=>'strong')) . $row['nickname'] . '<br />';
					
					// City
					$user[] = $GLOBALS['DIV']->wrap($this->LL->getLL('city'),'span',array('class'=>'strong')) . $row['city'] . '<br />';
					
					// Country
					$user[] = $GLOBALS['DIV']->wrap($this->LL->getLL('country'),'span',array('class'=>'strong')) . $row['country'] . '<br />';
					
					// Mail
					$user[] = $GLOBALS['DIV']->wrap($this->LL->getLL('email'),'span',array('class'=>'strong')) . $GLOBALS['DIV']->linkEmail($row['email']) . '<br />';
					
					// Date
					$user[] = $GLOBALS['DIV']->wrap($this->LL->getLL('date'),'span',array('class'=>'strong')) . date($GLOBALS['conf']['dateFormat'],$row['crdate']);
					
					// End DIV
					$user[] = '</div>';
					
					// Add user
					$users[] = $GLOBALS['DIV']->wrap($GLOBALS['DIV']->wrap(implode('',$user)),'div',array('class'=>'left-3col'));
					
					// Check counter
					if ($rows == 3 || $count == $peopleCount) {
						
						// End clearer DIV
						$users[] = '</div>';
						
						// Reset counter
						$rows = 0;
					}
				}
				
				// Return HTML code
				return implode('',$users);
				
			} else {
				
				// No result
				return $this->LL->getLL('no_user');
			}
		}
	}
?>
