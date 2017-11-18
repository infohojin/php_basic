<?php
	function rowsCount($count){
		for ($i=0;$i<$count;$i++){
			// 반복문 안에도 yield를 넣어서 반복할 수 있습니다.
			yield $i;
		}
	}

	foreach (rowsCount(10) as $i){
		echo " 실행 =". $i . "<br>";
	}
?>