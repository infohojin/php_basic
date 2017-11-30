<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $db->dbname = "jiny";
    $tbname = "members123";
    if ($db->isTables($tbname)){
    	echo $tbname." 존재하는 테이블 이름입니다.";
    } else {
    	
    }

?>