<?php

    class A
    {
        const NAME = 'A';
        public static function test() {
            $args = func_get_args();
            echo "Class == ".static::NAME, " ".join(',', $args)." <br>";
        }
    }

    class B extends A
    {
        const NAME = 'B';

        public static function test() {
            echo "Class : ". self::NAME, "<br>";

            // A클래스 test 매소드 호출
            forward_static_call_array(array('A', 'test'), array('more', 'args'));

            // 함수호출
            forward_static_call_array( 'test', array('other', 'args'));
        }
    }

    B::test('foo');

    function test() {
        $args = func_get_args();
        echo "function call = ".join(',', $args)." <br>";
    }

?>
