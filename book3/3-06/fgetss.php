<?php
$str = <<<EOD
<html><body>
 <p>Welcome! Today is the <?php echo(date('jS')); ?> of <?= date('F'); ?>.</p>
</body></html>
Text outside of the HTML block.
EOD;
	file_put_contents('sample.php', $str);

	$handle = @fopen("sample.php", "r");
	if ($handle) {
		while (!feof($handle)) {
			$buffer = fgetss($handle, 4096);
			 echo $buffer;
		}
		fclose($handle);
	}
?>
