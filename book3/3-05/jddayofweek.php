<?php
	$julianday = gregoriantojd( 8 , 6 , 2017 );

	// Return the day number as an int (0=Sunday, 1=Monday, etc)
	echo jddayofweek($julianday) ."<br>";

	// 1	Returns string containing the day of week (English-Gregorian)
	echo jddayofweek($julianday,1) ."<br>";

	// 2	Return a string containing the abbreviated day of week (English-Gregorian)
	echo jddayofweek($julianday,2) ."<br>";
?>
