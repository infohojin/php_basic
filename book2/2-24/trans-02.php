<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    // 트렌젝션시작
    if ($db->transaction()){
    	
    	// 데이터 전체를 삭제합니다.
    	$tbname = "members_all";
    	$db->deleteAll($tbname);

    	// 작업내용 롤백
    	// 위의 모든 데이터 작업을 취소합니다.
    	$db->rollback();

    } else {
    	echo "트렌젝션 모드로 전환할 수 없습니다.";
    }

?>