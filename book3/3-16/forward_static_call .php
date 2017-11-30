<?php

    class A
    {
        const NAME = 'A';
        public static function test() {
            $args = func_get_args();
            echo static::NAME, " ".join(',', $args)." <br>";
        }
    }

    class B extends A
    {
        const NAME = 'B';

        public static function test() {
            echo self::NAME, "<br>";
            forward_static_call(array('A', 'test'), 'more', 'args');
            forward_static_call( 'test', 'other', 'args');
        }
    }

    B::test('foo');

    function test() {
        $args = func_get_args();
        echo "C ".join(',', $args)." <br>";
    }

?>
