<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
	// ++ Mysqli DB 연결.
	$db = new JinyMysql();

	// 테이블을 잠금설정 합니다.
	$db->tableLock("members");

	// 잠금된 테이블을 해제 합니다.
	$db->tableUnLock();

?>
