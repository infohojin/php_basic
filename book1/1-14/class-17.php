<?php

    class MyClass
    {
        public $instance;

        public function __clone() {
            echo "clone object<br>";
        }

    }
        
    $obj = new MyClass();

    $obj2 = clone $obj;

?>
