<?php
	class JinyClass
	{
		public $age;
		public $name;
	}

	$obj = new JinyClass;
	
	// 프로퍼티에 값을 저장
	$obj->age = 18;

	// 프로퍼티의 값을 읽어 옵니다.
	echo "나이는 ".$obj->age." 입니다.<br>";

	// 간접 프로퍼티 접근
	// aaa 변수에 프로퍼티명을 설정후에 간접적으로 접근함
	$aaa = "name";
	$obj->$aaa = "jiny";

	// 프로퍼티의 값을 읽어 옵니다.
	echo "내이름은 ".$obj->$aaa." 입니다.<br>";

?>