<?php
	include "dbinfo.php";
 
 	// ++ PDO DB 연결
	try {
		$conn = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		echo "mysql PDO connect";
	}
	catch (PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
 
	$conn = null;
?>
