<?php
	$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
 
	if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    	echo("$ip 는 유효한 IPv6 address");
	} else {
    	echo("$ip 는 유효하지 않는 IPv6 address");
	}
?>  
