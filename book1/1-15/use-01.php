<?php
	namespace jiny\aaa;

	class Members1
	{
		public function setUsers($id)
		{
			echo "aaa 회원ID = $id";
		}
	}


	namespace jiny2\bbb;

	class Members
	{
		public function setUsers($id)
		{
			echo "bbb 회원ID = $id";
		}
	}


	// 네임스페이스를 aaa로 변경
	echo "네임스페이스를 aaa 변경<br>";
	use jiny\aaa\Members1;

	// 네임스페이스 이름을 같이 적용 
	$obj = new Members1;
	$obj->setUsers(1);
?>