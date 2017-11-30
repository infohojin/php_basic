<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 현재 데이터베이스 이름을 확인합니다.
    echo "현재 데이터베이스 = ".$db->currentDatabase();

?>