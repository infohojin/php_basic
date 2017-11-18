<?php
class Car {
        function Car() {
          $this->model = "Grandure";
        }
}

// 객체 인스턴스를 생성하는 변수
$hyndai = new Car();

// show object properties
echo $hyndai->model;

?>