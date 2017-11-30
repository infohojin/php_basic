<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $tbname = "members3";

    // 최상위 데이터 2개만 삭제합니다.
    $db->deleteLimit($tbname, 2);

    // LastName 정렬후에  데이터 2개만 삭제합니다.
    $db->deleteLimit($tbname, 2, "LastName desc");
?>