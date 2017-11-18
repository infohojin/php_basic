<?php
$cars = array
  (
  array("Volvo",10,300),
  array("BMW",11,250),
  array("Saab",12,350),
  array("kia",13,200)
  );
  
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>