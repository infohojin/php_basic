<?php

	$csv = array_map('str_getcsv', file('sample.csv'));
	print_r($csv);
?> 
