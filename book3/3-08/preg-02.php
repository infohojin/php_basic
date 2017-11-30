<?php
	$string = 'jun 21, 2017';
	$pattern = '/(\w+) (\d+), (\d+)/i';
	$replacement = '${1} ${2}, $3';
	echo preg_replace($pattern, $replacement, $string);
	echo "<br>";

	$string = 'hello world! my name is jiny.';
	
	$patterns[0] = '/hello world/';
	$patterns[1] = '/my name is/';
	$patterns[2] = '/jiny/';

	$replacements[2] = '안녕하세요';
	$replacements[1] = '제 이름은 ';
	$replacements[0] = '지니';

	echo preg_replace($patterns, $replacements, $string);

?>
