<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    // 테이블을 복사합니다.
    $db->insertSelectWhere("members", "members1","Id=1","FirstName, LastName, email");
 
?>