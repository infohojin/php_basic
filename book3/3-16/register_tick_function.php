<?php
	declare(ticks=1);

	register_tick_function('my_function', true);

	$object = new my_class();
	register_tick_function(array(&$object, 'my_method'), true);
?>
