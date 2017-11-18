<?php
	interface pages
	{

		public function index();

	}

	class intro implements pages
	{
		public function index()
		{
			echo "인터페이스 소개 <br>";
		}
	}

	$obj = new intro();
	$obj->index();
	
?>