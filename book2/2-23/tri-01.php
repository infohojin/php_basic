<?php

	include "dbinfo.php";
	include "mysql.class.php";
 
    // ++ Mysqli DB 연결.
    $db = new JinyMysql();

    $queryTrigger = "
        CREATE TRIGGER backup_mem BEFORE DELETE
        ON members FOR EACH ROW
        BEGIN
            INSERT INTO members1 (FirstName,LastName) VALUES (OLD.FirstName, OLD.LastName);
        END";

    if ($db->createTrigger($queryTrigger)){
        echo "Trigger 성공!";
    } else {
        echo "트리거를 생성이 되지 않았습니다.";
    }  

 
?>