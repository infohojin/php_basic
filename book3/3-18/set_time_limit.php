<?php
	// 스크립트 최대 실행 시간 100초
	set_time_limit(100);
	echo "스크립트시간 100초<br>";

	while ($i<=50){
        echo "sleep=$i , ";
        sleep(1);
        $i++;
	}
?>

