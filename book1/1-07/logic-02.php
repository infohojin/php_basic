<?php
	$x = false;
	$y = false;
	$z = true;

	if( $x || $y )
	{
		echo "x || y = true <br>";
	} else {
		echo "x || y = false <br>";
	}

	if( $x || $y || $z)
	{
		echo "x || y || z = true <br>";
	} else {
		echo "x || y || z = false <br>";
	}
?>