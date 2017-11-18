<?php
	// 클래스를 선언합니다.
	class Jiny
	{
		public static $aaa = 10;
	
		public function show(){
			echo "show = ". self::$aaa;
		}
	}

	echo "aaa = ". Jiny::$aaa ."<br>";

	Jiny::show();

?>
