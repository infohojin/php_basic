<?php
	$filename = 'index.php';
	$filegroup_Id = filegroup($filename);
	echo "filegroup ID = " . $filegroup_Id . "<br>";

	print_r(posix_getgrgid($filegroup_Id));
?>
