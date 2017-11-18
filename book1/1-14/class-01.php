<?php
	class language {
		const ENGLISH = "en";
		const KOREAN = "ko";

		public function getEnglish()
		{
			return self::ENGLISH;
		}
	}

	$obj = new language();

	echo "클래스 상수출력<br>";
	echo "KOREAN = " . $obj::KOREAN . "<br>";

	echo "메소드를 이용한 상수출력<br>";
	echo "ENGLISH = " . $obj->getEnglish() . "<br>";
?>