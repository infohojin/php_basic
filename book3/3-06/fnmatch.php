<?php
    $filename = "gray";
    if (fnmatch("*gr[ae]y", $filename)) {
        echo "some form of gray ...";
    } else {
        echo "not match";
    }
?>
