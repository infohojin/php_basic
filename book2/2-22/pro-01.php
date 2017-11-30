<?php

	include "dbinfo.php";
	include "mysql.class.php";

    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $name = "mem";
    if($rowss = $db->callProcedure($name,1)){
        echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
        
    }
 
?>