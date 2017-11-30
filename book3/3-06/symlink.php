<?php
    $target = 'symlink.php';
    $link = 'symlink';
    symlink($target, $link);
    echo readlink($link);
?>
