<?php
	$n = "label2";
	
	switch ($n) {
    	case label1:
      		echo "n 값이 label1 일 경우 실행됩니다.";
    	break;

    	case label2:
      		echo "n 값이 label2 일 경우 실행됩니다.";
    	// break;

    	case label3:
      		echo "n 값이 label3 일 경우 실행됩니다.";
    	break;

    	default:
      		echo "n 값이 일치하는게 없는 경우 실행됩니다.";
	}

?>