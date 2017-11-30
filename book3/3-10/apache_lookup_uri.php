<?php
    $info = apache_lookup_uri('apache_getenv.php');
    print_r($info);

    if (file_exists($info->filename)) {
        echo 'file exists!';
    }
?>
