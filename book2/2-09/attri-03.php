<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    $field = "email";
    
    // 컬럼필드 유일필드 설정
    $db->constraintUNIQUE($tbname, $field);
 
?>