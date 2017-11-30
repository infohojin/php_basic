<?php
	// 서브및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";

		// 다음줄 nl을 <br>로 변환하여 출력함.
		echo "comment= <br>" . nl2br($_POST['comment']);
		echo "<br>==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' action='".$_SERVER['PHP_SELF']."'>";

	echo "<textarea name=\"comment\" rows=\"5\" cols=\"40\"></textarea>";

	echo "<br>";
	echo "<input type='submit' value='확인'>";
	echo "</form>";	
	
?>
