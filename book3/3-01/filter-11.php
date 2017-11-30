<?php
	$url = "https://www.hojin.io";
 
	// Remove all illegal characters from a url
	$url = filter_var($url, FILTER_SANITIZE_URL);
 
	// Validate url
	if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    		echo("$url is a valid URL");
	} else {
    		echo("$url is not a valid URL");
	}
?> 
