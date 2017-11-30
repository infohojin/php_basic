<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $name = "backup_mem";
    if($db->dropTrigger($name)){
        echo $name." 트리거 삭제성공! <br>";

        if($rowss = $db->showTriggers()){
            echo "tables fields = ". count($rowss) . "<br>";
 
            for($i=0;$i<count($rowss);$i++){
                echo $i."=";            
                print_r($rowss[$i]);
                echo "<br>";
            }
        } else {
            echo $name." 트리거를 찾을 수 없습니다.";
        }
        
    } else {
        echo "트리거를 삭제 할 수 없습니다.<br>";
    }
 
?>