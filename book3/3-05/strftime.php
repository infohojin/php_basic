<?php

	echo "축약된 요일이름 = ". strftime("%a") ."<br>";
	echo "요일이름 = ". strftime("%A") ."<br>";
	echo "날짜(10진수) = ". strftime("%d") ."<br>";

	echo "Day of the month, with a space preceding single digits. Not implemented as described on Windows. See below for more information. = ". strftime("%e") ."<br>";

	echo "Day of the year, 3 digits with leading zeros = ". strftime("%j") ."<br>";
	echo "ISO-8601 numeric representation of the day of the week = ". strftime("%u") ."<br>";
	echo "Numeric representation of the day of the week = ". strftime("%w") ."<br>";

	echo "Week number of the given year, starting with the first Sunday as the first week = ". strftime("%U") ."<br>";
	echo "ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week	01 through 53 = ". strftime("%V") ."<br>";

	echo "A numeric representation of the week of the year, starting with the first Monday as the first week	46 (for the 46th week of the year beginning with a Monday) = ". strftime("%W") ."<br>";

	echo "Abbreviated month name, based on the locale = ". strftime("%b") ."<br>";
	echo "Full month name, based on the locale = ". strftime("%B") ."<br>";
	echo "Abbreviated month name, based on the locale (an alias of %b) = ". strftime("%h") ."<br>";
	echo "Two digit representation of the month = ". strftime("%m") ."<br>";
	echo "Two digit representation of the century (year divided by 100, truncated to an integer) = ". strftime("%C") ."<br>";
	echo "Two digit representation of the year going by ISO-8601:1988 standards (see %V) = ". strftime("%g") ."<br>";
	echo "The full four-digit version of %g = ". strftime("%G") ."<br>";

	echo "Two digit representation of the year = ". strftime("%y") ."<br>";
	echo "Four digit representation for the year = ". strftime("%Y") ."<br>";
	echo "Two digit representation of the hour in 24-hour format = ". strftime("%H") ."<br>";
	echo "Hour in 24-hour format, with a space preceding single digits = ". strftime("%k") ."<br>";
	echo "Two digit representation of the hour in 12-hour format = ". strftime("%I") ."<br>";
	echo "Hour in 12-hour format, with a space preceding single digits = ". strftime("%l") ."<br>";
	echo "Two digit representation of the minute = ". strftime("%M") ."<br>";
	echo "UPPER-CASE 'AM' or 'PM' based on the given time = ". strftime("%P") ."<br>";
	echo "lower-case 'am' or 'pm' based on the given time = ". strftime("%p") ."<br>";
	
	echo "Same as %I:%M:%S %p = ". strftime("%r") ."<br>";
	echo "Same as %H:%M = ". strftime("%R") ."<br>";
	echo "Two digit representation of the second = ". strftime("%S") ."<br>";
	echo "Same as %H:%M:%S = ". strftime("%T") ."<br>";
	echo "Preferred time representation based on locale, without the date = ". strftime("%X") ."<br>";
	echo "The time zone offset. Not implemented as described on Windows. See below for more information. = ". strftime("%z") ."<br>";
	echo "The time zone abbreviation. Not implemented as described on Windows. See below for more information. = ". strftime("%Z") ."<br>";
	
	echo "Preferred date and time stamp based on locale = ". strftime("%c") ."<br>";
	echo "Same as %m/%d/%y = ". strftime("%D") ."<br>";
	echo "Same as %Y-%m-%d (commonly used in database datestamps) = ". strftime("%F") ."<br>";
	echo "Unix Epoch Time timestamp (same as the time() function) = ". strftime("%s") ."<br>";
	
	echo "Preferred date representation based on locale, without the time = ". strftime("%x") ."<br>";
	echo "A newline character = ". strftime("%n") ."<br>";
	echo "A Tab character = ". strftime("%t") ."<br>";
	echo "A literal percentage character = ". strftime("%%") ."<br>";

?>
