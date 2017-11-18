<?php
// 익명 함수를 통해 변수에 대입합니다. 
$closure = function ($name) {
  echo “hello ” . $name;
};

// 변수명을 함수처럼 사용할 수 있습니다.
echo $closure(“jiny”);
?>
