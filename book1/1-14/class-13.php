<?php
	class BaseClass
	{
		function __construct()
		{
			echo "BaseClass 초기화<br>";
		}

		public function show()
		{
			echo "hello world! <br>";
		}

		function __destruct()
		{
			echo "BaseClass 소멸<br>";
		}
	}

	// 인스턴스 생성
	$obj = new BaseClass();
	$obj->show();
?>