<?php
	include "dbinfo.php";
 
	// ++ Mysqli DB 절차적 연결
	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
		echo "mysql 절차적 connect<br>";
	}
 
	mysqli_close($conn);
?> 
