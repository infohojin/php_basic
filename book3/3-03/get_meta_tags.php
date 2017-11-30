<?php
	// html 파일
	$tags = get_meta_tags("sample.htm");

	echo "META author = ". $tags['author'] ."<br>";       
	echo "META keywords = ". $tags['keywords'] ."<br>";     
	echo "META description = ". $tags['description'] ."<br>";  

?>
