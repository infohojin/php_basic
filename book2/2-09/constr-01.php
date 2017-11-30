<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    $field = "City";
    $$default = "Seoul";
    
    // 속성 기본값을 설정합니다.
    $db->constraintDEFAULT($tbname, $field, $default);
 
?>