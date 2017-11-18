<?php
	namespace jiny\aaa;

	class members
	{
		public function setUsers($id)
		{
			echo "회원ID = $id";
		}
	}

	
	namespace jiny\bbb;

	class members
	{
		public function setUsers($id)
		{
			echo "회원ID = $id";
		}
	}


	// 네임스페이스 이름을 같이 적용 
	echo "네임스페이스 \jiny\aaa\<br>";
	$obj = new \jiny\aaa\members();
	$obj->setUsers(126);

	echo "<br>";

	// 네임스페이스 이름을 같이 적용
	echo "네임스페이스 \jiny\bbb\<br>";
	$obj2 = new \jiny\bbb\members();
	$obj2->setUsers(127);


?>