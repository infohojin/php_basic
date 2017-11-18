<?php
	function setHeight($minheight = 50) {
    	echo "The height is : $minheight <br>";
	}

	// 함수 호출시 매개변수 값을 250을 입력합니다.
	setHeight(250);

	// 매개변수 값이 없습니다.
	// 기본값 50이 적용이 됩니다.
	setHeight();

?>