<?php
	try {
		$servername = "localhost";
		$dbname = "testDB";
		$username = "jiny";
		$pasword = "abcd1234";

		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	} catch (PDOException $e) {
		echo "PDO 오류";

	} catch (Exception $e) {
		echo "일반예외";
	}
?>