<?php
	$x = 10;
	$y = 3;
	echo "x = $x <br>";

	$div = 0;
	for($i=0;$i<$x;$i++)
	{
		if($x>=$y)
		{
			$x = $x - $y;
			$div = $div + 1;

			echo "x = $x , div = $div <br>";

		} else {
			echo "x < y 보다 작습니다. 반복문 탈출";
			break;
		}
		
	}

	echo "나누기 못 = ". $div . ", 나머지 = " . $x;
?>