<?php
	trait Hello {
    	public static function sayHelloWorld() {
        	return "Hello World!";
    	}
	}

	class MyHelloWorld {
    	use Hello;
	}

	echo MyHelloWorld::sayHelloWorld();
?>
