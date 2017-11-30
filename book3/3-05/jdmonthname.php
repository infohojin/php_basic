<?php
	$julianday = gregoriantojd( 8 , 6 , 2017 );

	// 0
	// Gregorian - abbreviated	Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec
	echo jdmonthname ( $julianday , 0 ) ."<br>";
	
	// 1
	// Gregorian	January, February, March, April, May, June, July, August, September, October, November, December
	echo jdmonthname ( $julianday , 1 ) ."<br>";
	
	// 2
	// Julian - abbreviated	Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec
	echo jdmonthname ( $julianday , 2 ) ."<br>";
	
	// 3
	// Julian	January, February, March, April, May, June, July, August, September, October, November, December
	echo jdmonthname ( $julianday , 3 ) ."<br>";
	
	// 4
	// Jewish	Tishri, Heshvan, Kislev, Tevet, Shevat, AdarI, AdarII, Nisan, Iyyar, Sivan, Tammuz, Av, Elul
	echo jdmonthname ( $julianday , 4 ) ."<br>";

	// 5
	// French Republican	Vendemiaire, Brumaire, Frimaire, Nivose, Pluviose, Ventose, Germinal, Floreal, Prairial, Messidor, Thermidor, Fructidor, Extra
	echo jdmonthname ( $julianday , 5 ) ."<br>";

?>
