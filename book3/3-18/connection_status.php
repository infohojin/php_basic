<?php
	$status = connection_status();
	if ($status!=0){
    	die;
    } else {
    	echo $status."<br>";
    	echo "접속상태 입니다.";
    }
?>
