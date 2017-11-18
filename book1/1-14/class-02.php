<?php
	class JinyClass
	{

		public function test($msg)
		{
			return $msg;
		}
	}

	$JinyClass = new JinyClass();
	echo "JinyClass 인스턴스<br>";
	echo $JinyClass->test("JinyClass") . "<br>";

	$obj1 = new JinyClass;
	$obj2 = new JinyClass;

	echo "클래스 인스턴스1<br>";
	echo $obj1->test(1) . "<br>";

	echo "클래스 인스턴스2<br>";
	echo $obj2->test(2) . "<br>";
?>