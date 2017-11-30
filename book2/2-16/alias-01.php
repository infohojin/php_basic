<?php
 
	include "dbinfo.php";
    include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();
 
    $tbname = "members";
 
    // 컬럼 지정조회 
    echo "===== 컬럼조회 =====<br>";
    if($rowss = $db->select($tbname,"FirstName as 이름, LastName as 성")){
    	echo "tables fields = ". count($rowss) . "<br>";
 
        for($i=0;$i<count($rowss);$i++){
            echo $i."=";            
            print_r($rowss[$i]);
            echo "<br>";
        }
    }
 
?>
