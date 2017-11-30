<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $tbname = "members";
    $arr = array('Country' => 'Korea');

    // 최상위 데이터 2개만 갱신합니다.
    $db->updateLimit($tbname, $arr, 2);

    // LastName 정렬후에 데이터 2개만 갱신합니다.
    $db->updateLimit($tbname, $arr, 2, "LastName desc");
?>