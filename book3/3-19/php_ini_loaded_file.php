<?php
	$inipath = php_ini_loaded_file();

	if ($inipath) {
    	echo 'Loaded php.ini: ' . $inipath;
	} else {
    	echo 'A php.ini file is not loaded';
	}
?>
