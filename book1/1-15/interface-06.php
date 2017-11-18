<?php
	interface a
	{
    	public function foo();
	}

	interface b 
	{
    	public function bar();
	}

	class Bird {
		public function info() {
			echo "I am a {$this->name} <br>";
			echo "I am an bird <br>";
		}
	}

	class Penguin extends Bird implements a, b {
		var $name = "Penguin";
		
		public function foo()
    	{
    		echo "method is foo <br>";
    	}

    	public function bar()
    	{
    		echo "method is bar <br>";
    	}

	}

	$obj = new Penguin;

	// 상속 메서드 입니다.
	$obj->info();

	// 인터페이스 a의 메서드 입니다.
	$obj->foo();

	// 인터페이스 b의 메서드 입니다.
	$obj->bar();

?>
