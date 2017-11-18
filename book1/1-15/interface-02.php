<?php
	interface pages
	{

		public function index();

	}

	class intro implements pages
	{

	}

	$obj = new intro();
	
?>