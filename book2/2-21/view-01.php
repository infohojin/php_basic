<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 뷰를 생성합니다.
    $db->createView("viewtest", "select * from members");

?>