<?php
	$x = false;
	$y = false;
	$z = true;

	if( $x xor $y )
	{
		echo "x xor y  = true 두개의 논리가 틀립니다.<br>";
	} else {
		echo "x xor y = false 두개의 논리가 같습니다.<br>";
	}

	if( $x xor $z)
	{
		echo "x xor z = true 두개의 논리가 틀립니다.<br>";
	} else {
		echo "x xor z = false 두개의 논리가 같습니다.<br>";
	}
?>