<?php
	namespace jiny\site;

	class members
	{
		public function setUsers($id)
		{
			echo "회원ID = $id";
		}
	}

	// 네임스페이스 이름을 같이 적용 
	$obj = new \jiny\site\members();
	$obj->setUsers(124);
?>