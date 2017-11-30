<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $tbname = "members";
    $arr = array('FirstName' => 'hojin', 'LastName' => 'lee');
    $db->updateID($tbname, $arr, 2);

?>