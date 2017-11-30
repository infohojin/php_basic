<?php
	$str = "I'll \"walk\" the <b>cat</b> now";
	echo $str."<br>";

	$a = htmlentities($str);
	echo $a."<br>";

	echo html_entity_decode($a);

?>
