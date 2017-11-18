<?php
    /* 유닉스 형식 명령줄 필터로
     * 문단의 첫 대문자를 소문자로 바꿉니다. */
    $fp = fopen("README.txt", "r") or die("stdin을 읽을 수 없습니다");
    while (!feof($fp)) {
        $line = fgets($fp);
        $line = preg_replace_callback(
            '|<p>\s*\w|',
            create_function(
             // 여기에서 홑따옴표가 중요합니다.
             // 혹은 모든 $를 \$로 회피해야 합니다.
             '$matches',
             'return strtolower($matches[0]);'
            ),
            $line
        );
    echo $line;
    }

    fclose($fp);
?> 