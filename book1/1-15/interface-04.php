<?php
    interface a
    {
        public function foo();
    }

    interface b
    {
        public function bar();
    }

    interface c extends a, b
    {
        public function baz();
    }

    class d implements c
    {
        public function foo()
        {
            echo "method is foo <br>";
        }

        public function bar()
        {
            echo "method is bar <br>";
        }

        public function baz()
        {
            echo "method is baz <br>";
        }
    }

    $obj = new d;

    // 인터페이스 a의 메서드 입니다.
    $obj->foo();

    // 인터페이스 b의 메서드 입니다.
    $obj->bar();

    // 인터페이스 c의 메서드 입니다.
    $obj->baz();

?> 