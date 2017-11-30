<?php
	$target = 'output.php';
	$link = 'output.html';
	symlink($target, $link);

	lchgrp($link, 8);
?>
