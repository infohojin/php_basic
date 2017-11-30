<?php
 
	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    // 뷰를 업데이트 합니다.
    $db->alterView("viewtest", "select FirstName, LastName from members where Id=1");
 
?>