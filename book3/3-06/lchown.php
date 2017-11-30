<?php
	$target = 'output.php';
	$link = 'output.html';
	symlink($target, $link);

	lchown($link, 8);
?>
