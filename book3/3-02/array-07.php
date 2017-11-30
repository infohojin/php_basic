<?php
	$arr = array('firstname' => "hojin", 'lastname' => "lee" );
	$index = array_keys($arr);

	while(list($key,$val) = each($index)){
		echo $key. "==>" .$val. "<br>";
	}
?>
