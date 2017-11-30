<?php

	$ch = curl_init('http://www.example.com/');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if ($response = curl_exec($ch))	{
		
		$info = curl_getinfo($ch);
		print_r($info);
		echo "<br>";

		switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
   			case 200:
   				echo 'success <br>';
      			break;
    		default:
      			echo 'Unexpected HTTP code: ', $http_code, "\n";
  		}

	} else {
		// 오류 발생시 : 오류 메시지를 읽어옵니다.
    	echo "Curl error Message : ". curl_error($ch) ."<br>";
    	
    	// 오류 넘버를 출력합니다.
    	echo "cURL Error No : ". curl_errno ($ch);

	} 

	// 종료
	curl_close($ch);
?>
