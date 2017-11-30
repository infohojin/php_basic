<?php
	// 배열을 생성합니다.
	$arr = array('orage', 'apple', 'grape');
	
	// 배열의 값을 각각의 변수에 값을 매칭하여 대입합니다.
	list($orage, $apple, $grape) = $arr;

	echo "변수 orage = $orage <br>";
	echo "변수 apple = $apple <br>";
	echo "변수 grape = $grape <br>";

	echo "<br> ===== <br><br>";

	while(list($key,$val) = each($arr)){
		echo $key. "==>" .$val. "<br>";
	}

?>
