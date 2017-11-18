<?php
  $a = false;
  $b = 0;

  // 논리값으로 쓰여진 변수인지를 확인합니다.
  if (is_bool($a) === true) {
    echo "a는 논리 변수 입니다.";
  }

  echo "<br>";

  // $b는 정수 0 입니다. 논리 변수가 아니라서 false 를 반한합니다.
  if (is_bool($b) === false) {
    echo "b는 논리 변수가 아닙니다.<br>";
    var_dump($b);
  }

?> 