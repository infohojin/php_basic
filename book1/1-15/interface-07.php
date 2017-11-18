<?php

	interface a{

    	const name = "interface a const";
	}

	echo a::name;
	echo "<br>";

	class b implements a
	{

	}

	class c extends b
	{
    	const age = 'Class c constant';
	}

	echo c::age;

?>
