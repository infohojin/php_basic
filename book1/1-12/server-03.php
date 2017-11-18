<?php
	if($_SERVER['REQUEST_METHOD'] == "GET"){
		echo "GET 방식으로 접속하였습니다.<br>";
	} else if($_SERVER['REQUEST_METHOD'] == "POST"){
		echo "POST 방식으로 접속하였습니다.<br>";		
	} else {

	}

	echo "REQUEST_TIME = ".$_SERVER['REQUEST_TIME'];
	echo "<br>";

	echo "REQUEST_URI = ".$_SERVER['REQUEST_URI'];
	echo "<br>";

	echo "HTTP_USER_AGENT = ".$_SERVER['HTTP_USER_AGENT'];
	echo "<br>";

	echo "APPLPHYSICAL_PATH = ".$_SERVER['APPLPHYSICAL_PATH'];
	echo "<br>";
?>