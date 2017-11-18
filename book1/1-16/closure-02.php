<?php
// 함수를 선언합니다.
// memCustomer() 함수는 클로저(익명 함수)를 반환합니다. 
function memCustomer($name){

	// $name 변수를 둘러싼 클로저를 반환합니다.
	return function ($doCommand) use ($name){
	return echo “name=” . $name . “, Command=” . $doCommand;
}

}

// 함수의 인자 값으로 “hojin”을 전달합니다.
// 리턴으로 클로저 인스턴스를 반환받습니다.
$clousreTest = memCustomer(“hojin”);

// 클로저 익명 함수를 호출합니다.
echo $clousreTest(“jiny”); 
?>
