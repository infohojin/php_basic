<?php
    $temp = tmpfile();
    fwrite($temp, "writing to tempfile");
    fseek($temp, 0);
    echo fread($temp, 1024);
    fclose($temp); // this removes the file
?>
