<?php
	class JinyClass
	{
		public $message;

		public function setMessage($msg){
			$this->message = $msg;
		}

		public function showMessage(){
			return $this->message;
		}

	}

	$obj = new JinyClass;

	// 메소드를 호출합니다.
	$obj->setMessage("hello world!");

	// 매소드 호출 및 반환값
	$msg = $obj->showMessage();
	echo $msg . "<br>";

?>