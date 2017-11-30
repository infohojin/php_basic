<?php
	// 서브 및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";
		echo "agree = " . $_POST['agree'] ."<br>";
		echo "adult = " . $_POST['adult'] ."<br>";
		echo "==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' action='".$_SERVER['PHP_SELF']."'>";

	echo "Agreement : ";
	if ($_POST['agree']){
		echo "<input type='checkbox' name='agree' checked>";
	} else {
		echo "<input type='checkbox' name='agree'>";
	}
	echo "<br>";

	echo "Adult : ";
	if ($_POST['adult']){
		echo "<input type='checkbox' name='adult' checked>";
	} else {
		echo "<input type='checkbox' name='adult'>";
	}

	echo "<br>";
	echo "<input type='submit' value='확인'>";
	echo "</form>";

?>
