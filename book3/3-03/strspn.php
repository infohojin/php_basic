<?php
	// mask에 맞는 initial segment의 길이를 반환합니다.
	$object = "423336 is the answer to the 128th question.";
	$mask =  "1234567890abcdefhijslmnopqrstuvwxyz";
	$var = strspn($object, $mask);

	echo $var;
?>
