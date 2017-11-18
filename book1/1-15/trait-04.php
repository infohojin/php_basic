<?php
	trait HelloWorld {
    		public function sayHello() {
        			echo "Hello World!";
    		}
	}

	// sayHello 속성을 변경
	class MyClass1 {
    		use HelloWorld { sayHello as protected; }

    		public function hello(){
    			echo "protect method call <br>";
    			$this->sayHello();
    		}
	}

	$obj = new MyClass1;
	$obj->hello();

?>
