<?php
	$text = "This is the Euro symbol '€'.";

	echo 'Original : ', $text, "<br>";
	echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), "<br>";
	echo 'IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), "<br>";
?>
