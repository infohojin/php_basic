<?php

	$string = "2017-06-33"; 
	$pattern = "/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/";

	if ( preg_match($pattern, $string,$matches) ) { 
    	echo"날짜 형식이 맞습니다.<br>";

    	if (checkdate($match[2],$match[3],$match[1])) {
    		echo "유효한 날짜입니다.<br>";
    	} else {
    		echo "날짜 형식은 맞지만, 유효한 날짜는 아닙니다.<br>";
    	}
	} else { 
    	echo"날짜 형식이 다릅니다.<br>"; 
	}

?>
