<?php
    // 아파치 환경 변수 SERVER_ADDR을 가져오는 방볍.
    $ret = apache_getenv("SERVER_ADDR");
    echo $ret;
?>
