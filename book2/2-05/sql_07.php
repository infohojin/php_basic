<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    if($rowss = $db->showDatabases()){
        echo "db Count = ". count($rowss) . "<br>";

        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            echo $rowss[$i]->Database;
            echo "<br>";

            print_r($rowss[$i]);
            echo "<br>";
        }
    }    

?>