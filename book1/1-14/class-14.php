<?php
	class BaseClass
	{
		function __call($method,$params)
		{
			echo "오류: 정의되지 않는 매소드 ".$method."를 ".implode(', ', $params)."호출하였습니다.";
		}

	}

	// 인스턴스 생성
	$obj = new BaseClass();
	$obj->show("a1","a2","a3");
?>