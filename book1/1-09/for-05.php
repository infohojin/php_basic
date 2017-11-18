<?php
	$cars = array(
		array("Volvo",10,300),
		array("BMW",11,250),
		array("Saab",12,350),
		array("kia",13,200)
	);

	for ($i = 0; $i < 4; $i++) {

		for ($j = 0; $j < 3; $j++) {
			echo $cars[ $i ][ $j ];
			echo " ";
		}

		echo "<br>";
	}

?>