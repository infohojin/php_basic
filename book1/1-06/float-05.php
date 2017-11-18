<?php
	// 올림
	echo ceil(4.3);    // 5
	echo ceil(9.999);  // 10
	echo ceil(-3.14);  // -3

	// 버림
	echo floor(4.3)."<br>";   // 4
	echo floor(9.999)."<br>"; // 9
	echo floor(-3.14)."<br>"; // -4

	// 반올림 처리
	echo round(3.4)."<br>";         // 3
	echo round(3.5)."<br>";         // 4
	echo round(3.6)."<br>";         // 4
	echo round(3.6, 0)."<br>";      // 4

	// 소수점 자리 반올림
	echo round(1.95583, 2)."<br>";  // 1.96
	echo round(5.045, 2)."<br>";    // 5.05
	echo round(5.055, 2)."<br>";    // 5.06

	// 소수점 위3자리에서 반올림
	echo round(1241757, -3)."<br>"; // 1242000
	
?>