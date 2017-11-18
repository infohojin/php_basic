<?php
	// 클래스를 선언합니다.
	class jiny
	{
		public static $my_static = 'jiny';
		
		public function staticValue()
		{
			return self::$my_static;
		}
	}

	// 정적 프로퍼티를 출력합니다.
	print "정적 프로퍼티 =". Jiny::$my_static . "<br>";

	$jiny = new Jiny();
	print "인스턴스 =". $jiny->staticValue() . "<br>";

	// 정적 프로퍼티는 인스턴트화된 경우 ->로 호출할 수 없습니다.  
	print "인스턴스 =".$jiny->my_static . "<br>";      // Undefined "Property" my_static 

	print "정적 프로퍼티 =".$jiny::$my_static . "<br>";
	$classname = 'Jiny';
	print "정적 프로퍼티 =".$classname::$my_static . "<br>"; // As of PHP 5.3.0

?>