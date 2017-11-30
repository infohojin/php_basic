<?php
	$setting = 'y2k_compliance';

	echo 'Current value for \'' . $setting . '\': ' . ini_get($setting), "<br>";

	ini_set($setting, ini_get($setting) ? 0 : 1);
	echo 'New value for \'' . $setting . '\': ' . ini_get($setting), "<br>";

	ini_restore($setting);
	echo 'Original value for \'' . $setting . '\': ' . ini_get($setting), "<br>";
?>
