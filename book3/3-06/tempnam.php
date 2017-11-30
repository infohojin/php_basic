<?php
	$tmpfname = tempnam("/tmp", "FOO");

	$handle = fopen($tmpfname, "w");
	fwrite($handle, "writing to tempfile");
	fclose($handle);

	// do here something
	unlink($tmpfname);
?>
