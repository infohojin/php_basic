<?php
	// 고유 ID값을 생성합니다.
	printf("uniqid(): %s <br>", uniqid());

	// 접두사를 붙여서 고유 ID값을 생성하빈다.
	$prefix = "php_";
	printf("uniqid('$prefix'): %s <br>", uniqid($prefix));

	// more_entropy
	printf("uniqid('', true): %s <br>", uniqid('', true));
?>
