<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	$res = $DB->db_select('t3fruni2006_people','*','deleted=0 AND confirmed=1');
	
	$users = array();
	
	$i = 0;
	
	function getVal($val,$country,$type,$test=0) {
		
		$dates = array();
		
		$days = array(
			'1' => 'Lu',
			'2' => 'Ma',
			'4' => 'Me',
			'8' => 'Je',
			'16' => 'Ve',
		);
		
		$prices = array(
			'day' => array(
				'EUR' => 20,
				'CHF' => 30,
			),
			'week' => array(
				'EUR' => 65,
				'CHF' => 100,
			),
			'lunch' => array(
				'EUR' => 10,
				'CHF' => 15,
			),
		);
		
		$country = strtolower($country);
		
		$currency = ($country == 'suisse' || $country == 'switzerland' || $country == 'ch') ? 'CHF' : 'EUR';
		
		foreach($days as $bit=>$day) {
			
			if ($bit & $val) {
				
				$dates[] = $day;
			}
		}
		
		$price = '';
		
		if ($type == 1 && count($dates)) {
			
			if (count($dates) == 5) {
				if ($test) {
				return $prices['week'][$currency];
				} else {
				$price = $currency . ' ' . $prices['week'][$currency];
				}
			} else {
				if ($test) {
				return $prices['day'][$currency] * count($dates);
				} else {
				$price = $currency . ' ' . ($prices['day'][$currency] * count($dates));
				}
			}
			
		} else if ($type == 2 && count($dates)) {
			if ($test) {
			    return $prices['lunch'][$currency] * count($dates);
			} else {
			    $price = $currency . ' ' . ($prices['lunch'][$currency] * count($dates));
			}
		} else if ($type == 3 && count($dates)) {
			return $currency;
		}
		
		return implode('-',$dates) . chr(9) . $price;
	}
	
	while($row = mysql_fetch_assoc($res)) {
		
		$i++;
		
		$user = array();
		$user[] = utf8_decode($row['email']);
		$user[] = utf8_decode($row['name_first']);
		$user[] = utf8_decode($row['name_last']);
		
		$users[] = implode(',',$user);
	}
	
	#header('Content-Type: text/plain; charset="iso-8859-15"');
	#header('Content-Disposition: attachment; filename="t3fruni2006_people.txt"');
	print(implode(chr(10),$users));
	exit();
