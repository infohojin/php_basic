<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $tbname = "members";
    $arr = array('Country' => 'Korea');
    $db->updateWhere($tbname, $arr, "Id>='2'");

?>