<?php

	$string = "aaa;bbb;ccc;ddd;eee";
	$arr = explode(";", $string);

	foreach ($arr as $key => $value) {
		echo $key."=",$value."<br>";
	}

	$msg = implode(",", $arr);
	echo $msg;

?>
