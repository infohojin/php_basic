<?php

	/* calculate the sunrise time for Lisbon, Portugal
	Latitude: 38.4 North
	Longitude: 9 West
	Zenith ~= 90
	offset: +1 GMT
	*/

	echo date("D M d Y"). ', sunrise time : ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);

?>
