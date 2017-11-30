<?php
	print "env is: ".$_ENV["USER"]."<br>";

	putenv("USER=jiny");
	print "getenv is: ".getenv("USER")."<br>";

?>
