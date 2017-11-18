<?php
    trait a {
        public function name() {
            echo "trait A name<br>";
        }

        public function age() {
            echo "trait A age<br>";
        }
    }

    trait b {
        public function name() {
            echo "trait B name<br>";
        }

        public function age() {
            echo "trait B age<br>";
        }
    }

    class members {
        use a, b {
            b::name insteadof a;
            a::age insteadof b;
            b::name as name2;
        }
    }

    $obj = new members;
    $obj->name();
    $obj->age();

    // as 별칭 메서드
    $obj->name2();

?>
