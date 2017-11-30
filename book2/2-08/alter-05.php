<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    $src = "birth";
    $dst = "regdate";
    $datatype = "varchar(20)";
    
    // 필드를 추가합니다.
    $db->tableFieldChange($tbname, $src, $dst, $datatype);
 
?>