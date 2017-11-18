<?php
	if(isset($_COOKIE['user'])) {
		echo $_COOKIE['user'];
	} else {
		echo "쿠키가 없습니다.";
	}
?>