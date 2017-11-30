<?php
	
	$arr['FirstName'] = "lee";
	$arr['LastName'] = "hojin";
	$user['1'] = $arr;

	$arr['FirstName'] = "jiny";
	$arr['LastName'] = "PHP";
	$user['2'] = $arr;

	$json = json_encode($user);
	echo $json;

?>
