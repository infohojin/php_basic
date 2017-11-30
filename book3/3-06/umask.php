<?php
	$old = umask(0);
	chmod("/path/some_dir/some_file.txt", 0755);
	umask($old);

	// Checking
	if ($old != umask()) {
    	die('An error occurred while changing back the umask');
	}
?>
