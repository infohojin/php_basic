<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 어레이 배열의 키/값을 통하여 데이터를 삽입합니다.
    $tbname = "members";
    $arr = array('FirstName' => "jiny", 'LastName' => "123400");
    $db->arrInsert($tbname,$arr);

    echo "마지막 Id = ".$db->insertID();

?>