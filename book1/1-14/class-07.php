<?php
	class members
	{
		private $user_name;
		private $user_age;
		private $user_sex;

		// 이름을 설정합니다.
		public function setUserName($name)
		{
			$this->user_name = $name;

			// 자기 자신의 객체를 반환합니다.
			return $this;
		}

		// 나이를 설정합니다.
		public function setUserAge($age)
		{
			$this->user_age = $age;

			// 자기 자신의 객체를 반환합니다.
			return $this;
		}

		// 성별을 설정합니다.
		public function setUserSex($sex)
		{
			$this->user_sex = $sex;

			// 자기 자신의 객체를 반환합니다.
			return $this;
		}

		public function show()
		{
			printf("안녕하세요. 저는 %s 입니다. 나이는 %d이고요 %s 입니다.",$this->user_name, $this->user_age, $this->user_sex);
		}
	}

	// 클래스를 선언합니다.
	$objMembers = new members;
	$objMembers->setUserName("jiny")->setUserAge(18)->setUserSex("남자")->show();

?>