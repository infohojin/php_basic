<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    $field = "address2";
    $datatype = "varchar(255)";
    
    // 필드를 추가합니다.
    $db->tableFieldModify($tbname, $field, $datatype, "Address");
 
?>