<?php

	$scriptDate = date ("F d Y H:i:s.", getlastmod());
	echo "죄종수정일: " . $scriptDate . "<br>";

	if (date ("Y-m-d", getlastmod()) <= "2017-10-03"){
		echo "스크립트가 최신버젼이 아닙니다. 업그레이드를 해주세요<br>";
	} else {
		echo "최신<br>";
	}

?>
