<?php
	interface a
	{
    	public function foo();
	}

	// a 인터페이스를 상속 받습니다.
	interface b extends a
	{
    	public function bar();
	}

	// 상속받은 b 인터페이스로 구현합니다.
	class c implements b
	{
    	public function foo()
    	{
    		echo "method is foo <br>";
    	}

    	public function bar()
    	{
    		echo "method is bar <br>";
    	}
    	
	}

	$obj = new c;

	// 인터페이스 a의 메서드 입니다.
	$obj->foo();

	// 인터페이스 b의 메서드 입니다.
	$obj->bar();

?>

