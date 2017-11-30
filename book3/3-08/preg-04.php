<?php
	$keywords = '$123 for a hojin/jiny';
	$keywords = preg_quote($keywords, '/');
	echo $keywords;
	echo "<br>";

	// preg_quote($word)는 정규 표현식에서 애스터라이크(*) 처리
	$body = "안녕하세요 본 책은 매우 *쉽게* 작성을 하였습니다.";
	$word = "*매우*";
	$body = preg_replace("/".preg_quote($word)."/", "<i>" . $word . "</i>", $body);
	echo $body;
?>
