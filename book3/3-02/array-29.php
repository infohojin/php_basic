<?php
	$arr = array( 'fruit1' => 'apple', 'fruit2' => 'orange', 'fruit3' => 'grape', 'fruit4' => 'apple', 'fruit5' => 'apple');

	while ($name = current($arr)) {
    	if ($name == 'apple') {
        	echo key($arr).'<br>';
    	}
    	
    	next($arr);
	}
?>
