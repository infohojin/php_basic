<?php
	$x;
	if(is_null($x)){
    	echo "x = NULL 입니다.";
    } else {
    	echo "x = NULL이 아닙니다.";
    }

    echo "<br>";

	$username = $x ?? 'nobody';
	echo "username = $username";
?>