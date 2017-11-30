<?php
	$string = 'cup';
	$name = 'coffee';

	// 작은 따옴표는 일반 텍스트로 문자를 인식합니다.
	// $string, $name 는 변수명 자체를 화면에 출력합니다.
	$str = 'This is a $string with my $name in it.';
	echo $str. "<br>";

	// PHP 코드 처리됩니다.
	$code = "\$aaa = \"$str\";";
	eval($code);

	echo $aaa;
?>
