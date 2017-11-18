<?php

class A {

    function __construct($val) {
        $this->val = $val;
    }

    function getClosure() {
        // 클로저를 반환합니다. 
// returns closure bound to this object and scope
        return function() { return $this->val; };
    }
}

// $obj1, $obj2 클래스 인스턴스를 생성합니다.
$ob1 = new A(1);
$ob2 = new A(2);

// getClosure() 메서드를 호출하여 클로저를 반환받습니다.
$closure = $ob1->getClosure();
echo $closure(), "\n";

$closure = $closure->bindTo($ob2);
echo $closure(), "\n";

?>
