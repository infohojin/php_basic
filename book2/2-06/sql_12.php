<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 현재 데이터베이스 이름을 확인합니다.
    $dbname = $db->currentDatabase();
    echo "현재 데이터베이스 = ". $dbname . "<br>";
    $key = "Tables_in_".$dbname;

    if($rowss = $db->showTables()){
        echo "tables Count = ". count($rowss) . "<br>";

        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            echo $rowss[$i]->$key;
            echo "<br>";

            print_r($rowss[$i]);
            echo "<br>";
        }
    }    

?>