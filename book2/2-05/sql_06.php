<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $dbname = "jiny123";
    if ($db->isDatabases($dbname)){
    	echo $dbname." 존재하는 데이터베이스 이름입니다.";
    } else {
    	$db->createDatabase($dbname);
    }

?>