<?php
	// 상수를 정의합니다.
	define("MY_CONSTANT", 1);
	// 정의된 모든 상수들을 출력합니다.
	// 카테고리도 같이 출력합니다.
	print_r( get_defined_constants(true) );
?> 