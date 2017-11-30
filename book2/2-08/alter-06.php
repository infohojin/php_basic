<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    $field = "regdate";
    
    // 필드를 삭제합니다.
    $db->tableFieldDrop($tbname, $field);
 
?>