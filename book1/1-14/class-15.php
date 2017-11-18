<?php
	class TestClass
	{
    		public $foo;

    		public function __construct($foo)
    		{
        		$this->foo = $foo;
    		}

    		public function __toString()
    		{
        			return $this->foo;
    		}
	}

	$obj = new TestClass('Hello');
	
	// 클래스가 문자열로 변환 
	echo $obj;
?>
