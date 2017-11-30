<?php
    // 터치 시간입니다
    // 과거 한 시간으로 설정.
    $time = time() - 3600;

    // 파일의 수정 시간을 재설정합니다.
    if (!touch('touch.php', $time)) {
        echo 'wrong...';
    } else {
        echo 'success';
    }
?>
