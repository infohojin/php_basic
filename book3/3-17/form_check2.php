<?php
	// 서브및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";
		$TID = $_POST['TID'];

		for($i=0;$i<count($TID);$i++){
    		echo $i ."=". $TID[$i] ."<br>";						
       	}	

		echo "==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' action='".$_SERVER['PHP_SELF']."'>";

	// 체크값의 이름이 배열형태로 지정
	echo "<input type='checkbox' name='TID[]' value='100' checked> <br>";
	echo "<input type='checkbox' name='TID[]' value='102' checked> <br>";
	echo "<input type='checkbox' name='TID[]' value='105' checked> <br>";
	echo "<input type='checkbox' name='TID[]' value='107' checked> <br>";
	echo "<input type='checkbox' name='TID[]' value='110' checked> <br>";

	echo "<br>";
	echo "<input type='submit' value='확인'>";
	echo "</form>";

?>
