<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $queryString = "select * from orders WHERE Id between 3 and 8";
    if($rowss = $db->selectRowss($queryString)){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }

?>