<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $queryString = "select FirstNAme,LastName, 
        case
            when Id>= 5 then '5th'
            when Id>= 4 then '4th'
            when Id>= 3 then '3th'
            when Id>= 2 then '2th'
            else '1th'
        end as No
    from members;";
    
    if($rowss = $db->selectRowss($queryString)){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }

?>