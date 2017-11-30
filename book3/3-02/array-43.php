<?php
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
// result is array(12, 10, 9, 0, 0)
print_r($result);
echo "<br>";

$result = array_pad($input, -7, -1);
// result is array(-1, -1, -1, -1, 12, 10, 9)
print_r($result);
echo "<br>";

$result = array_pad($input, 2, "noop");
// not padded
print_r($result);
echo "<br>";
?>
