<?php
	namespace jiny;

	class members
	{
		public function setUsers($id)
		{
			echo "회원ID = $id";
		}
	}

	// 네임스페이스 이름을 같이 적용 
	$obj = new \jiny\members();
	$obj->setUsers(123);

	echo "<br>";
	// 현재 네임스페이스를 적용
	$obj2 = new members();
	$obj2->setUsers(123);

?>