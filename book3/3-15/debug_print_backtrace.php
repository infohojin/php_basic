<?php

	function a() {
    	b();
	}

	function b() {
    	c();
	}

	function c(){
    	debug_print_backtrace();
	}

	a();

?>
