<?php
	class MyClass
	{

		public function __set($name, $value) {
			echo "Setting '$name' to '$value' <br>";
		}

		public function __isset($name)
		{
			echo "Is '$name' set? <br>";
		}

		public function __unset($name)
		{
			echo "Unsetting '$name' <br>";
		}

	// 접근불가 프로퍼티에 대해 isset() 나 empty() 가 호출되었을때 불려집니다. 

		public function __get($name) {
			echo "Reading '$name' <br>";
		}


	}

	$obj = new MyClass();

	// 접근 불가 프로퍼티에 값을 설정할때 매직 매소드 __set() 호출
	$obj->name = "jiny";

	isset($obj->name);

	empty($obj->name);

	unset($obj->name);


	// 접근 불가 프로퍼티에 값을 읽을때 매직 매소드 __get() 호출
	echo $obj->name;
?>
