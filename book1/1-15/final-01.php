<?php
    // php.ini 의 수정없이, 화면에 에러발생시 출력할 수있습니다.
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    // 기본클래스 a를 생성합니다.
    class a
    {

        final public function copyright (){
            // 본 매서드 함수는 대체되지 않습니다.
            echo "copyright all Right JinyPHP";
        }

    }

    // 기본 클래스 a를 상속하는 b 클래스를 생성합니다.
    class b extends a
    {

        public function copyright(){
            // 본 매서드 함수는 대체되지 않습니다.
            echo "copyright all Right ...";
        }

     
    }

    // 상속받은 b 클래스 인스턴스를 생성합니다.
    $obj = new b();

    $obj->copyright();

?>
