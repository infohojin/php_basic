<?php
	// 2진법으로 값을 설정합니다.
	$a = 0b00000011;
	$b = 0b00001111;
	printf("a = %02x <br>",$a);
	printf("b = %02x <br>",$b);

	$xor = $a ^ $b;
	printf("a^b = %02x <br>",$xor);
?>