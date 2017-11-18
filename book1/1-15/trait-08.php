<?php
	trait PropertiesTrait {
    	public $x = 1;
	}

	class myClass {
    	use PropertiesTrait;
	}

	$obj = new myClass;
	echo $obj->x;
?>
