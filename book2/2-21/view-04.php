<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 뷰를 삭제합니다.
    $db->dropView("viewtest");

?>