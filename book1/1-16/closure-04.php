<?php
class A {
	private $x = 1;
}

// Pre PHP 7 code
$getXCB = function() {
	return $this->x;
};

// intermediate closure
$getX = $getXCB->bindTo(new A, 'A'); 
echo $getX();


// PHP 7+ code
$getX = function() {
	return $this->x;
};
echo $getX->call(new A);
// 기존 bindTo를 사용하던 것을 call로 처리할 수 있다.

?>
