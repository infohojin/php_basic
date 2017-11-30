<?php
    $link = 'symlink';

    if (is_link($link)) {
        echo $link . " is symbolic link";
    } else {
        echo $link . " is not symbolic link";
    }
?>
