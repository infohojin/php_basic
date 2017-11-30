<?php
	$str = "name[]=jiny&name[]=lee&country=korea";
	parse_str($str);

	echo $country . "<br>";

	echo $name[0]."<br>";
	echo $name[1]."<br>";
?>