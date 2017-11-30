<?php
	$ip = "127.0.0.1";
 
	if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    		echo("$ip 는 유효한 IP주소 입니다.");
	} else {
    		echo("$ip 는 유효하지 IP주소 입니다.");
	}
?> 
