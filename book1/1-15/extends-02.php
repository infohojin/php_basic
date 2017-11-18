<?php
    // 기본클래스 a를 생성합니다.
    class a
    {
        public function isAdult($age)
        {
            if($age>=18) return true; else return false;
        }

    }

    // 기본 클래스 a를 상속하는 b 클래스를 생성합니다.
    class b extends a
    {
        public function whatIs($string,$age)
        {
            echo "myName is: " . $string . "<br>";

            if (parent::isAdult($age)){
                echo "성인입니다.<br>";
            } else {
                echo "미성년 입니다.<br>";
            }

        }

    }

    // 상속받은 b 클래스 인스턴스를 생성합니다.
    $obj = new b();

    // 새롭게 추가한 매소드 함수를 사용할 수 있습니다.
    $obj->whatIs("hojinLee",18);

    $obj->whatIs("jiny",17);
?>
