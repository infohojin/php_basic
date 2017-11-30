<?php

    $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

    $host = 'www.example.com';
    $service_uri = '/cgi/proACT';
    $vars ='code=23&act=TESTing';

    //# HTTP 요청해더 구성
    $header = "Host: $host\r\n";
    $header .= "User-Agent: PHP Script\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: ".strlen($vars)."\r\n";
    $header .= "Connection: close\r\n\r\n";

    $fp = pfsockopen("ssl://".$host, 443, $errno, $errstr);
    if (!$fp) {
        echo "$errstr ($errno)<br/>\n";
        echo $fp;
    } else {
        fputs($fp, "POST $service_uri  HTTP/1.1\r\n");
        fputs($fp, $header.$vars);
        fwrite($fp, $out);

        while (!feof($fp)) {
            echo fgets($fp, 128);
        }
        fclose($fp);
    } 

?>
