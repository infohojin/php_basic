<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
	// ++ Mysqli DB 연결.
	$db = new JinyMysql();

	$tbname = "members";

	// 전체조회
	echo "===== 전체조회 =====<br>";
	if ($rowss = $db->select($tbname)) {
		echo "tables fields = ". count($rowss) . "<br>";
 
		for ($i=0;$i<count($rowss);$i++) {
			echo $i."=";            
			print_r($rowss[$i]);
			echo "<br>";
		}
	}
?>
