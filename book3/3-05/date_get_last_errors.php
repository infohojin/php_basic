<?php
	// Object oriented style
	try {
    	$date = new DateTime('asdfasdf');
	} catch (Exception $e) {
    	// 데모 용..
    	print_r(DateTime::getLastErrors());

    	// 실제 객체 지향적 인 방법
    	// echo $e->getMessage();
	}
	
	//Procedural style
	$date = date_create('asdfasdf');
	print_r(date_get_last_errors());
?>
