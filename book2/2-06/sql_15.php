<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 데이터베이스 삭제합니다.
    $tbname = "members1";
    $db->clearTable($tbname);

?>