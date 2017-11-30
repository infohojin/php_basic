<?php
	$html = "
	<h1>안녕하세요!</h1>
	<br>
	<?php phpinfo(); ?>
	";

	echo $html;

	echo "=============== <br>";
	
	$temp = strip_tags($html);
	echo $temp;

?>
