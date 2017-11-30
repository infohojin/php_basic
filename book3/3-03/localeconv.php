<?php
	setlocale(LC_ALL, 'nl_NL.UTF-8@euro');

	$locale_info = localeconv();
	print_r($locale_info);

?> 
