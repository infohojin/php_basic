<?php
	$ctx = hash_init('md5');
	hash_update($ctx, 'hello world ');
	hash_update($ctx, 'jinyPHP.');
	echo hash_final($ctx);
?>
