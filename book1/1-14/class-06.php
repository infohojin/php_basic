<?php
	class JinyClass
	{
		public $message;

		public function show(){
			// 내부 메소드를 호출합니다.
			echo $this->getMessage();
		}

		public function getMessage(){
			return $this->message;
		}

	}

	$obj = new JinyClass;
	$obj->message = "안녕하세요";
	echo $obj->show() . "<br>";
?>