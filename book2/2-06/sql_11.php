<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $queryString = "
    	CREATE TABLE `members123` (
			`Id` int(11) NOT NULL AUTO_INCREMENT,
			LastName varchar(255),
    		FirstName varchar(255),
    		Address varchar(255),
    		City varchar(255),
			Country varchar(255),
			PRIMARY KEY (`Id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    // 테이블을 생성합니다.
    $db->createTable($queryString);

?>