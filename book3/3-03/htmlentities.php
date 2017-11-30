<?php
	$str = "A 'quote' is <b>bold</b>";

	// 출력: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
	echo htmlentities($str);
	echo "<br>";

	// 출력: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
	echo htmlentities($str, ENT_QUOTES);
	echo "<br>";

	$str = "\x8F!!!";

	// 출력: an empty string
	echo htmlentities($str, ENT_QUOTES, "UTF-8");
	echo "<br>";
	
	// 출력: "!!!"
	echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
	echo "<br>";
?>
