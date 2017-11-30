<?php
 
	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "products";

    // 컬럼 지정조회 
    echo "===== 컬럼조회 =====<br>";
    if($rowss = $db->select($tbname,"price+vat as total")){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }
 
?>