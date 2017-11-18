<?php
	
	$a = "jiny";
	$b = "lee";

	echo "글러벌 변수를 출력합니다. <br>";
	echo $a . " " . $b;
	echo "<br>";
	
	// 함수 정의
	function usersName(){
		// 글로벌 키워드를 통하여 외부 변수를 함수 내부에서 사용 가능하도록 만듭니다.
		global $a, $b;

		if($a){
			echo "a =". $a . "<br>";			
		} else {
			echo "a 값이 없습니다. <br>";
		}

		if($b){
			echo "b =".$b . "<br>";
		} else {			
			echo "b 값이 없습니다. <br>";
		}

	}

	// 함수를 호출
	echo "함수를 호출합니다.<br>";
	usersName();

?>