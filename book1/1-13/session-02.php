<?php
	session_start();
	
	$_SESSION["user"] = "jiny";
	echo $_SESSION["user"];
?>