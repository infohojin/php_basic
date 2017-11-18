<?php
	class aaaEx extends exception
	{
		public function showErr($msg)
		{
			echo $msg;
		}
	}

	$msg = "예외클래스 오류발생";
	$code = 444;
	$e = new aaaEx($msg,$code);

	$e->showErr("Exception을 상속합니다.");
	echo "<br>";
	echo "예외코드 = ".$e->getCode();
	echo "<br>";
	echo "예외메시지 = ".$e->getMessage();
?>