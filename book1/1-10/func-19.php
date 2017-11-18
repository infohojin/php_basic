<?php
	class jiny
	{
    	function Variable()
    	{
        	$name = 'Bar';
        	$this->$name(); // Bar() 메쏘드를 호출합니다.
    	}
    
    	function Bar()
    	{
        	echo "This is Bar";
    	}
	}

	$jiny = new jiny();
	$funcname = "Variable";
	$jiny->$funcname();  // $jiny->Variable()를 호출합니다.

?>