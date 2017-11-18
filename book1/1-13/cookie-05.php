<?php
	if(count($_COOKIE) > 0) {
    	echo "Cookies 존재. <br>";
    	print_r($_COOKIE);
	} else {
    	echo "Cookies 없음. <br>";
	}
?>