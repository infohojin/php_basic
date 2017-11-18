<?php
	class BaseClass
	{
		function __construct()
		{
			echo "BaseClass 초기화<br>";
		}
	}

	class SubClass extends BaseClass
	{
		function __construct($a1,$a2,$a3)
		{
			// 부모의 초기화 매소드를 실행합니다.
			parent::__construct();

			// 초기화 메소드를 실행합니다.
			echo "SubClass 초기화<br>";

			// 입력 매개변수를 확인합니다.
			echo "초기화 매개변수 a1 = ".$a1."<br>";
			echo "초기화 매개변수 a2 = ".$a2."<br>";
			echo "초기화 매개변수 a3 = ".$a3."<br>";
		}

		public function show()
		{
			echo "hello world! <br>";
		}
	}

	// 인스턴스 생성시 초기화 매게 변수를 같이 전달 합니다.
	$obj = new SubClass("인자1","인자2","인자3");
	$obj->show();

?>