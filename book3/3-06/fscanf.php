<?php
	$handle = fopen("users.txt", "r");
	while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) {
    	list ($name, $profession, $countrycode) = $userinfo;
    	//... do something with the values
	}
	fclose($handle);
?>
