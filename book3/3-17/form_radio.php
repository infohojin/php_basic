<?php
	// 서브및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";
		echo "sex = " . $_POST['sex'] ."<br>";
		echo "==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' action='".$_SERVER['PHP_SELF']."'>";

	if ($_POST['sex'] == "female"){
		echo "<input type=\"radio\" name=\"sex\" value=\"female\" checked>Female";
		echo "<input type=\"radio\" name=\"sex\" value=\"male\">Male";

	} else if ($_POST['sex'] == "male"){
		echo "<input type=\"radio\" name=\"sex\" value=\"female\">Female";
		echo "<input type=\"radio\" name=\"sex\" value=\"male\" checked>Male";
	
	} else {
		echo "<input type=\"radio\" name=\"sex\" value=\"female\">Female";
		echo "<input type=\"radio\" name=\"sex\" value=\"male\">Male";
	}	

	echo "<br>";
	echo "<input type='submit' value='확인'>";
	echo "</form>";	
	
?>
