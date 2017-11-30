<?php

	echo get_include_path();  
	set_include_path('/inc');

	echo get_include_path(); 
	restore_include_path();

?>
