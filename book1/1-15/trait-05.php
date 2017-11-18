<?php
	trait a {
    	public function foo() {
        	echo "Trait Method foo!<br>";
    	}
	}

	trait b {
		
		// 트레이트 a 를 조합
		use a;

    	public function bar() {
        	echo "Trait Method bar!<br>";
    	}
	}

	class myClass {
		use b;
	}

	$obj = new myClass;
	$obj->foo();
	$obj->bar();

?>
