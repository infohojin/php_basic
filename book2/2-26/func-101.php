<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $name = "test";
    if($db->dropFunction($name)){
        echo $name." 함수 삭제성공! <br>";

        if($rowss = $db->isFunction($name)){
            echo "tables fields = ". count($rowss) . "<br>";
 
            for($i=0;$i<count($rowss);$i++){
                echo $i."=";            
                print_r($rowss[$i]);
                echo "<br>";
            }
        } else {
            echo $name." 함수를 찾을 수 없습니다.";
        }
        
    } else {
        echo "함수를 삭제 할 수 없습니다.<br>";
    }
 
?>