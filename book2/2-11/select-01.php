<?php

	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $tbname = "members";

    // 전체조회
    echo "===== 전체조회 =====<br>";
    if($rowss = $db->select($tbname)){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }

    // 컬럼 지정조회 
    echo "===== 컬럼조회 =====<br>";
    if($rowss = $db->select($tbname,"FirstName, LastName")){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }

    // 컬럼, 조건 지정조회 
    echo "===== 컬럼조회 =====<br>";
    if($rowss = $db->select($tbname,"FirstName, LastName","Id<=3")){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }

?>