<?php

    // 추상화 클래스를 선언합니다.
    abstract class a
    {
        // 확장시 구현부가 필요한 메서드 정의
        abstract public function isAdult($age);
        
        public function copyright ()
        {
            // 본 매서드 함수는 대체되지 않습니다.
            echo "copyright all Right JinyPHP";
        }
    }

    // 추상화 적용
    class b extends a
    {
        // 추상화 인터페이스를 구현
        public function isAdult($age)
        {
            if ($age>=18) return true; else return false;
        }
    }

    $obj = new b();

    // 추상화에 선언된 일반 매소드를 상속, 호출가능합니다.
    $obj->copyright();

    if ($obj->isAdult(18)){
        echo "성인입니다.";
    } else {
        echo "미성년 입니다.";
    }

?>