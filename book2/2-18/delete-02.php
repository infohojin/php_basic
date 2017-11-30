<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $tbname = "members2";
    $db->deleteID($tbname, 2);

?>