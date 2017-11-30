<?php

	$number = 1234.56;

	// 로컬설정 en_US
	setlocale(LC_MONETARY, 'en_US');
	echo "en_US". money_format('%i', $number) . "<br>";
	// USD 1,234.56

	// 이탈리아 포맷  2 decimals`
	setlocale(LC_MONETARY, 'it_IT');
	echo money_format('%.2n', $number) . "\n";
	// Eu 1.234,56

	// 음수값
	$number = -1234.525234;

	// US 포맷
	// 왼쪽 정밀도의 경우 10 자리
	setlocale(LC_MONETARY, 'en_US');
	echo money_format('%(#10n', $number) . "\n";
	// ($        1,234.57)

	// 위 형식과 비슷한 형식으로 2 자리의 오른쪽 자리 정밀도와
	// '*'를 채우기 문자로 추가합니다.
	echo money_format('%=*(#10.2n', $number) . "\n";
	// ($********1,234.57)

	
	// 왼쪽에서 14 자리의 너비, 8 자릿수의 왼쪽 자릿수, 2 자의 오른쪽 자릿수
	// withouth 그룹화 문자 및 de_DE 로켈의 국제 형식 사용을합시다.
	setlocale(LC_MONETARY, 'de_DE');
	echo money_format('%=*^-14#8.2i', 1234.56) . "\n";
	// Eu 1234,56****

	
	// 전환 지정 전후에 몇 가지 문안을 추가해 보겠습니다.
	setlocale(LC_MONETARY, 'en_GB');
	$fmt = 'The final value is %i (after a 10%% discount)';
	echo money_format($fmt, 1234.56) . "\n";
	// The final value is GBP 1,234.56 (after a 10% discount)

?>
