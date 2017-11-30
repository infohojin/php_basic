<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 데이터베이스명을 변경합니다.
    $dbname = "jiny";
    $db->changeDatabase($dbname);

?>