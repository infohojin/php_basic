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

    	// 작업내용 실제적용
    	if ($db->commit()){
    		echo "모든 데이터가 적용 커밋 하였스	니다.<br>";
    	} else {
    		echo "커밋을 실패하였습니다.";
    	}

    } else {
    	echo "트렌젝션 모드로 전환할 수 없습니다.";
    }

?>