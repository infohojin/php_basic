<?php
    error_reporting(E_ALL | E_STRICT);
    $args = array(
        'name'   => FILTER_SANITIZE_ENCODED,
        'age' => FILTER_VALIDATE_INT,
        'country'   => FILTER_SANITIZE_ENCODED
    );
    $myinputs = filter_input_array(INPUT_GET, $args);
    var_dump($myinputs);
?>
