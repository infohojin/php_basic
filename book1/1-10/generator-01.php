<?php

	// yield 키워드는 값을 반환한다는 측면에서 return 키워드와 비슷하면서도 다르다. 

	function myGen(){
		// 호출시 첫번째 yield 키워드까지 실행한다.
		echo "첫번째호출=";
		yield "test1";

		// 호출시 두번째 yield 키워드까지 실행한다.
		echo "두번째호출=";
		yield "test2";

		// 호출시 세번째 yield 키워드까지 실행한다.
		echo "세번째호출=";
		yield "test3";
		
	}

	foreach (myGen() as $value) {
		echo $value."<br>";
	}

?>