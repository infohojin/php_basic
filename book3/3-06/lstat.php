<?php
	symlink('uploads.php', 'uploads');

	// Contrast information for uploads.php and uploads
	array_diff(stat('uploads'), lstat('uploads'));
?>
