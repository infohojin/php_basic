<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $name = "mem";
    if($db->dropProcedure($name)){
        echo $name." 프로시저 삭제성공! <br>";

        if($rowss = $db->isProcedure($name)){
            echo "tables fields = ". count($rowss) . "<br>";
 
            for($i=0;$i<count($rowss);$i++){
                echo $i."=";            
                print_r($rowss[$i]);
                echo "<br>";
            }
        } else {
            echo $name." 프로시저를 찾을 수 없습니다.";
        }
        
    } else {
        echo "프로시저를 삭제 할 수 없습니다.<br>";
    }
 
?>