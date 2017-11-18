<?php
	if($_SERVER['HTTPS'] == "on"){
		echo "https://";
	} else {
		echo "http://";
	}
?> 