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
        // a의 매소드를 오버라이딩 다시 정의 합니다.
        public function isAdult($age)
        {
            if($age>=20) return true; else return false;
        }

        public function whatIs($string,$age)
        {
            echo "myName is: " . $string . "<br>";

            if ($this->isAdult($age)){
                echo "성인입니다.<br>";
            } else {
                echo "미성년 입니다.<br>";
            }

        }

        public function old18($string,$age)
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

    echo "오버라이딩한 클래스의 결과<br>";
    // 새롭게 추가한 매소드 함수를 사용할 수 있습니다.
    $obj->whatIs("hojinLee",18);
    $obj->whatIs("jiny",17);

    // 오버라이딩 이전의 매소드를 이용합니다.
    // parent 키워드 이용
    echo "===== <br>";
    echo "오버라이딩 이전의 클래스의 결과<br>";
    $obj->old18("hojinLee",18);
    $obj->old18("jiny",17);
?>
