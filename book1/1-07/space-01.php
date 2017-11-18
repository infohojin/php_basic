<?php
	// 정수
	echo "정수<br>";
	echo "1 <=> 1 = ";
	echo 1 <=> 1; // 0
	echo "<br>";
	echo "1 <=> 2 = ";
	echo 1 <=> 2;
	echo "<br>"; // -1
	echo "2 <=> 1 = ";
	echo 2 <=> 1;
	echo "<br>"; // 1


	// 실수
	echo "<br>";
	echo "실수<br>";
	echo "1.5 <=> 1.5 = ";
	echo 1.5 <=> 1.5;
	echo "<br>"; // 0
	echo "1.5 <=> 2.5 = ";
	echo 1.5 <=> 2.5;
	echo "<br>"; // -1
	echo "2.5 <=> 1.5 = ";
	echo 2.5 <=> 1.5;
	echo "<br>"; // 1
 
	// 문자열
	echo "<br>";
	echo "문자열<br>";
	echo "a <=> a = ";
	echo "a" <=> "a";
	echo "<br>"; // 0
	echo "a <=> b = ";
	echo "a" <=> "b";
	echo "<br>"; // -1
	echo "b <=> a = ";
	echo "b" <=> "a";
	echo "<br>"; // 1
?>