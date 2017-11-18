<?php 
	// 파일의 전체 경로와 파일명, 절대 경로를 표시합니다.
	echo __FILE__ . "<br/>\n";

	// 상수를 정의한 위치가 5 라인입니다. 
	echo __LINE__ . "<br/>\n";

	// 서버에 설치된 PHP버전을 표시합니다.
	echo PHP_VERSION . "<br/>\n";

	// PHP가 실행 중인 OS의 이름을 표시합니다.
	echo PHP_OS . "<br/>\n";

	echo TRUE . "<br/>\n";

	echo FALSE . "<br/>\n";  

	// 함수명 상수 정의 
	function functionname(){ 
    		echo __FUNCTION__."<br>"; 
	} 
	
	functionname();

	// 클래스명 상수 정의 
	class classtest
	{ 
    		var $test = __CLASS__; 
    		function test()
    		{ 
           			echo $this->test; 
    		} 
	} 

	$test = new classtest; 
	echo $test->test."<br>";

	// 메서드명 상수 정의 
	class classtest2
	{ 
    		var $test = __METHOD__; 
    		function test()
    		{ 
          			echo $this->test; 
    		} 
	} 

	$test2 = new classtest2; 
	echo $test2->test."<br>";
	

 ?>
