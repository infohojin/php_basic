<?php
	function barber($type)
	{
    	echo "You wanted a $type haircut <br>";
	}

	call_user_func('barber', "mushroom");
	call_user_func('barber', "shave");
?>
