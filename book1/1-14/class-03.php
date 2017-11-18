<?php
	class JinyClass
	{
		public $message;

		public function showMessage(){
			return $this->message;
		}

	}

	$obj = new JinyClass;
	$obj->message = "testing clone";
	echo $obj->showMessage() . "<br>";

	$obj2 = clone $obj;
	echo $obj2->showMessage() . "<br>";

?>