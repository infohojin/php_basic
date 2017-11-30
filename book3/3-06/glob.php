<?php
	foreach (glob("*.exe") as $filename) {
    		echo "$filename size " . filesize($filename) . "<br>";
	}
?>
