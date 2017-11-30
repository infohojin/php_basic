<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 테이블 구조를 확인합니다.
    $tbname = "members";
    if($rowss = $db->descTable($tbname)){
        echo "tables fields = ". count($rowss) . "<br>";

        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }    

?>