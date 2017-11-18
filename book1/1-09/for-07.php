<?php
	for($i=0;$i<5;$i++){
		for($j=4; $j>$i-1;$j--){
			echo "_";
		}

		for($k=1; $k<$i+1;$k++){
			echo "*";
		}

		for($m=1; $m<$i;$m++){
			echo "*";
		}

		echo "<br>";
	}
?>