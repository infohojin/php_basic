<?php
	$age = 20;
  	$sex = "woman";
  	$type = "coperation";

  	if($sex == "man"){
    	
    	if($age >= 20){
      		echo "성인 남자 입니다.";
    	} else {
      		echo "미성년자 남자 입니다.";
    	}

  	} else if($sex == "woman"){
    	
    	if($age >= 20){
      		echo "성인 여자 입니다.";
    	} else {
      		echo "미성년자 여자 입니다.";
    	}

  	} else if($sex == "company"){
    	
    	if($type == "personal"){
      		echo "개인 기업 입니다.";
    	} else {
    		echo "법인 기업 입니다.";
    	}

	} else {
    	echo "성별을 구분할 수 없습니다.";
	}

?>