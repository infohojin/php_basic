<?php
    $x = 5;
    $y = 10;

    function test() {
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    test();
    echo $y; // outputs 15
?>