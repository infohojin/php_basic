<?php
	/* 유닉스 형식 명령줄 필터로
     * 문단의 첫 대문자를 소문자로 바꿉니다. */
	$fp = fopen("README.txt", "r") or die("can't read stdin");
	while (!feof($fp)) {
    	$line = fgets($fp);
    	$line = preg_replace_callback(
        	'|<p>\s*\w|',
        	function ($matches) {
            	return strtolower($matches[0]);
        	},
        	$line
    	);
    	echo $line;
	}
	fclose($fp);
?>