<?php
	function gen(){
    	yield "gen() 1 실행";
    	yield "gen() 2 실행";

    	// 3번째 yield는 gen2() 제너레이터로 연결
    	yield from gen2();
	}

	function gen2(){
    	yield "gen2() 3 실행";
    	yield "gen2() 4 실행";
	}

	foreach (gen() as $val){
    	echo $val."<br>";
	}
?>