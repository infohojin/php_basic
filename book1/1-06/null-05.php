<?php
	function _coalescing($var, $default){
		if(isset($var)){
			if($var == NULL){
				return $var;
			} else {
				return $default;
			}
		} else {
			return $default;
		}
	}

	$x;
	if(is_null($x)){
    	echo "x = NULL 입니다.";
    } else {
    	echo "x = NULL이 아닙니다.";
    }

    echo "<br>";

	$username = _coalescing($x,"nobody");
	echo "username = $username";
?>