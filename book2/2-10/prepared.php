<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
 	}

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO members (firstname, lastname, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email);

	// set parameters and execute
	// 데이터1
	$firstname = "jiny";
	$lastname = "lee";
	$email = "jiny@jinyphp.com";
	$stmt->execute();

	// 데이터2
	$firstname = "hojin";
	$lastname = "lee";
	$email = "hojin@jinyphp.com";
	$stmt->execute();

	$stmt->close();
	$conn->close();
?> 
