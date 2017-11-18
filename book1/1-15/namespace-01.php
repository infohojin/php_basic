<?php
	class members
	{
		public function setUsers($id)
		{
			echo "회원ID = $id";
		}
	}

	$obj = new members();
	$obj->setUsers(123);
?>