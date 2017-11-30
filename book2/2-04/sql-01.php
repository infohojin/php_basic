<?php

	include "dbinfo.php";

	// ++ Mysqli DB 연결.
	$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
 
	/* check connection */
	if($mysqli->connect_errno) {
		die('DB Connect Error'.$mysqli->connect_error);
	} else {
    		echo "mysql connect<br>";
	}

?>
