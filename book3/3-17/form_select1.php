<?php
	// 서브및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";
		echo "country = " . $_POST['country'] ."<br>";
		echo "==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' action='".$_SERVER['PHP_SELF']."'>";

	$body = "<select name=\"country\">";
	$body .= "<option value=\"kr\">대한민국</option>";
	$body .= "<option value=\"jp\">일본</option>";
	$body .= "<option value=\"cn\">중국</option>";
	$body .= "</select>";

	// 기본 선택값을 selected 로 처리
	if ($_POST['country']) 
		$body = str_replace(
			"value=\"".$_POST['country']."\"",
			"value=\"".$_POST['country']."\" selected",
			$body);

	echo $body;

	echo "<br>";
	echo "<input type='submit' value='확인'>";
	echo "</form>";	
	
?>
