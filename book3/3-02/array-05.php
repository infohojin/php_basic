<?php
	// 배열을 생성합니다.
	$arr = array('orage', 'apple', 'grape');
	
	$test = each($arr);
	echo "원소 0= ".$test[0]."<br>";
	echo "원소 1= ".$test[1]."<br>";
	echo "원소 key= ".$test[key]."<br>";
	echo "원소 value= ".$test[value]."<br>";

	echo "<br><br>";

	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}

?>
