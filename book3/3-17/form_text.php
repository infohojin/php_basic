<?php
	// 서브및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";
		echo "username= <br>" . $_POST['username'];
		echo "<br>==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' action='".$_SERVER['PHP_SELF']."'>";

	echo "<input type=\"text\" name=\"username\">";

	echo "<br>";
	echo "<input type='submit' value='확인'>";
	echo "</form>";	
	
?>
