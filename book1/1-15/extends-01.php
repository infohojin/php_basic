<?php
    // 기본클래스 a를 생성합니다.
    class a
    {
        public function hello($string)
        {
            echo "Hello = " . $string . "<br>";
        }

    }

    // 기본 클래스 a를 상속하는 b 클래스를 생성합니다.
    class b extends a
    {
        public function whatIs($string)
        {
            echo "myName is: " . $string . "<br>";
        }

    }

    // 상속받은 b 클래스 인스턴스를 생성합니다.
    $obj = new b();

    // 상속받은 부모의 매소드 함수를 사용할 수 있습니다.
    $obj->hello("jiny");

    // 새롭게 추가한 매소드 함수를 사용할 수 있습니다.
    $obj->whatIs("hojinLee");

?>
