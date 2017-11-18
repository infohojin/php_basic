<?php
	$abc = "123";
	$bbb = "abc";

	echo $bbb."<br>"; // abc라고 출력됩니다.
	echo $$bbb."<br>"; // 123 이라고 출력됩니다.

	echo ${$bbb}."<br>"; // 123
	echo ${"abc"}."<br>"; // 123

?>