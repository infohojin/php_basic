<?php
	$arr = array("hojin","jiny","james","eric"); 
	$reverse = array_reverse($arr);

	while(list($key,$val) = each($reverse)){
		echo $key. "==>" .$val. "<br>";
	}

?>
