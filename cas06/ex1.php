<?php 
	ini_set('display_errors', 'On');
	function validate($v, $type)
	{
		$v = trim($v);
		switch ($type) {
			case 'user':
				if(strlen($v) >= 6) {
					return true;
				} else {
					return false;
				}
				break;
			case 'pass':
				if(! (strpos($v, 'pass') === false) && strlen($v) >= 6) return true;
				else return false;
				break;
			case 'email':
				if(! (strpos($v, '@') === false)) return true;
				else return false;
				break;
		}
	}
?>