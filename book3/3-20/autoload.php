<?
	// 오토로드 처리흘 위한 파일

	// 클래스 파일을 구분하기 위한 사용자 정의 확장자를 사용하시면 , php 실행파일과 클래스파일 을 좀 더 쉽게 구분을 할 수 있습니다.
	$classExt = ".class.php"; 

	// 클래스를 호출하면 클래스명이 인자로 전달됩니다.
	function spl_autoload_register($className){
		$classFilePath = __DIR__ . "/" . $className . $classExt;

		// 클래스 파일이 존재하는지 검사를 합니다.
		// 클래스 파일이 없는 상태에서 require 등을 통하여 삽입을 한다고 하면, 에러를 발생할 수 있습니다.
		if(is_readable($classFilePath)){

			// 클래스 파일을 불러옵니다.
			require $classFilePath;
		
		}
		
	}

?>
