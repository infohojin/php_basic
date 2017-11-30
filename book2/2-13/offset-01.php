<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 기본 select 쿼리
    $query = "SELECT Id, FirstName, LastName FROM members";
    // 기본쿼리에 2만큼 이동후 3개를 출력함.
    $queryString = $db->offset($query,2,3);
    
    if($rowss = $db->selectRowss($queryString)){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }

?>