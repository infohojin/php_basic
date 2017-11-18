<?php

	// 기존 클래스 작성하는 것 과 같이 트레이트를 작성합니다.
	trait Latitude
	{
		public function getLatitude()
		{
    		echo "좌표  Latitude<br>";
  		}

	}

	trait Longtitude
	{
		public function getLongtitude()
 		{
			echo "좌표  Longtitude<br>";
 		}
	}

	// 지도 매핑 클래스를 생성합니다.
	class mapping
	{
		// use키워드로 트레이드를 삽입합니다.
		// 콤마로 구분하여 다중 트레이트를 구현합니다.
  		use Latitude, Longtitude;
  		
  		// 추가 클래스…. 구현
  		public function copyright()
        		{
            		// 본 매메서드 함수는 대체되지 않습니다.
            		echo "copyright all Right JinyPHP";
        		}

	}

	$obj = new mapping();

	// 트레이트로 삽입한 매메소드메서드를 실행합니다.
	$obj->getLatitude();
	$obj->getLongtitude();

	// 자체 선언 메소드메서드를 출력합니다.
	$obj->copyright();

?>
