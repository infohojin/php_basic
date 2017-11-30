<?php
	$var = 'ABCDEFGH:/MNRPQR/';
	echo "원본: $var<hr/>\n";

	/* 전제 문자열을 'bob'으로 변경합니다. */
	echo substr_replace($var, 'bob', 0) . "<br />\n";
	echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

	/* 문자열 앞에 'bob'을 추가합니다. */
	echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

	/* 'MNRPQR' 부분을 'bob'으로 바꾸기 합니다. */
	echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
	echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

	/* 'MNRPQR' 부분을 삭제합니다. */
	echo substr_replace($var, '', 10, -1) . "<br />\n";
?> 
