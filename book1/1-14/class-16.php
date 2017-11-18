<?php
	class dataInt
	{
    		public function __invoke($x)
    		{
        			var_dump($x);
    		}
	}

	$obj = new dataInt;

	$obj(5);
	
	var_dump(is_callable($obj));
?>
