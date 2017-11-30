<?php
	// 서브및 처리시 데이터값 확인
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "POST모드 호출 <br>";
		print_r($_FILES['upload']);
		echo "<br>";

		// 업로드 디렉토리 지정
		$target_dir = "./uploads";
		if(!is_dir($target_dir)){
			mkdir($target_dir);
		}

		$target_file = $target_dir . "/". basename($_FILES["upload"]["name"]);
		echo "저장파일명 = ". $target_file ."<br>";

		$uploadOk = true;

		// 업로드 할 파일이 존재하는지 검사
		if (file_exists($target_file)) {
    			echo "이미 존재하는 파일명입니다.";
    			$uploadOk = false;
		}

		// 파일 사이즈 제한
		if ($_FILES["upload"]["size"] > 500000) {
    			echo "파일 사이즈가 너무 큽니다.";
    			$uploadOk = false;
		}

		// 파일 등록 및 복사
		if ($uploadOk) {
			if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        				echo basename( $_FILES["upload"]["name"]). " 를 업로드 하였습니다.";
    			} else {
        				echo "파일 업로드 오류";
    			}
		} else {
    			echo "죄송합니다. 파일등록을 할 수 없습니다.";
		} 
		
		echo "<br>==========<br>";
	}

	// HTML form을 출력합니다.

	echo "<form name='jiny' method='post' enctype=\"multipart/form-data\" action='".$_SERVER['PHP_SELF']."'>";

	echo "<input type=\"file\" name=\"upload\" id=\"upload\">";
	echo "<input type='submit' value='확인'>";
	echo "</form>";

?>
