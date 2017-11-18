<?php
	trait Hello {
    		public function sayHelloWorld() {
        			echo "Hello ".$this->getWorld();
    		}

    		abstract public function getWorld();
	}

	class MyHelloWorld {
    		private $world;
    	
    		use Hello;
    	
    		public function getWorld() {
        			return $this->world;
    		}
    
    		public function setWorld($val) {
        			$this->world = $val;
    		}
	}

	$obj = new MyHelloWorld;
	$obj->setWorld("jiny");

	echo $obj->getWorld();
	echo "<br>";
	$obj->sayHelloWorld();

?>
