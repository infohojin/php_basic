<?php
	$data = array(
    	'foo' => 'bar',
    	'baz' => 'boom',
    	'cow' => 'milk',
    	'php' => 'hypertext processor'
	);

	echo http_build_query($data) . "<br>";
	echo http_build_query($data, '', '&amp;');

?>
