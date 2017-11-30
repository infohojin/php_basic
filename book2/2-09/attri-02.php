<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    
    // 컬럼필드 NULL 허용하지 않습니다.
    $db->constraintNOTNULL($tbname, "City", "varchar(30)");

    // 컬럼필드 NULL 허용.
    $db->constraintNULL($tbname, "FirstName", "varchar(20)");
 
?>