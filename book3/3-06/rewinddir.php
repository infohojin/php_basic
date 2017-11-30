<?php

    if ($handle = opendir('/home/php7')) {
        echo "Directory handle: $handle <br>";
        echo "Entries:<br>";

        echo "디렉토리를 반복하는 올바른 방법입니다. <br>";
        while (false !== ($entry = readdir($handle))) {
            echo "$entry <br>";
        }

        // 처음으로 다시 초기화
        rewinddir($handle);

        echo "디렉토리를 반복하는 잘못된 방법입니다. <br>";
        while ($entry = readdir($handle)) {
            echo "$entry <br>";
        }

        closedir($handle);
    }
?>
