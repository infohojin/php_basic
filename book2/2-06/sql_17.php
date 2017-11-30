<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 테이블 엔진을 변경합니다.
    $tbname = "members";
    $db->setEngine($tbname,"MyISAM");

?>