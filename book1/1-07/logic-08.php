<?php
	// 쉬프트 연산 예제
	
	$a = 0x01;
	printf("a = %02x <br>",$a);

	// 좌측 쉬프트는 * 2
	$a = $a<<1;
	printf("a = %02x <br>",$a);

	// 좌측 쉬프트는 * 2
	$a = $a<<2;
	printf("a = %02x <br>",$a);

	// 우측 쉬프트는 / 2
	$a = $a>>1;
	printf("a = %02x <br>",$a);

	// 우측 쉬프트는 / 2
	$a = $a>>2;
	printf("a = %02x <br>",$a);

?>