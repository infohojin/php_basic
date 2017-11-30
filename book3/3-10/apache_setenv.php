<?php
    apache_setenv("EXAMPLE_VAR", "Example Value");

    $ret = apache_getenv("EXAMPLE_VAR");
    echo $ret;
?>
