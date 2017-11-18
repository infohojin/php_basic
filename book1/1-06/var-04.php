<?php
	
	$name = "jiny";
	printf("name 변수값 = %s <br>", $name);

	$var['foo']['bar'] = "name";
	printf("배열값 = %s <br>", $var['foo']['bar']);

	// 이전 PHP 5.x
	echo "가변변수(name)값  = " . ${$var['foo'][ 'bar']};
	echo "<br><br>";
	
?>