<?php
	
	$a = "jiny";
	$b = "lee";

	echo "글러벌 변수를 출력합니다. <br>";
	echo $a . " " . $b;
	echo "<br>";
	
	// 함수 정의
	function usersName(){
		$title = "jinyPHP";

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

	echo "<br>";

	echo "함수 안에 title 변수를 확인합니다.<br>";
	if($title){
			echo "title =". $title . "<br>";			
		} else {
			echo "title 값이 없습니다. <br>";
		}

?>