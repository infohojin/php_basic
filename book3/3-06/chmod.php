<?php

	if (chmod("test.txt",0755)) {
		echo "모드변경";
	} else {
		echo "변경실패";
	}
?>
