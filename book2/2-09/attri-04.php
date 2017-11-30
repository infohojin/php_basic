<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
    
    // 테이블 자동증가 값을 초기화 합니다.
    $db->autoIncrementClear($tbname,"100");
 
?>