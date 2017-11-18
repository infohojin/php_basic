<?php
	namespace jiny\aaa;

	class members
	{
		public function setUsers($id)
		{
			echo "aaa 회원ID = $id";
		}
	}


	namespace jiny\bbb;

	class members
	{
		public function setUsers($id)
		{
			echo "bbb 회원ID = $id";
		}
	}

	use jiny\aaa as aaa;
	use jiny\bbb as bbb;

	// 네임스페이스 이름을 같이 적용 
	$obj = new aaa\members();
	$obj->setUsers(1);

	echo "<br>";

	// 네임스페이스 이름을 같이 적용 
	$obj = new bbb\members();
	$obj->setUsers(2);
?>