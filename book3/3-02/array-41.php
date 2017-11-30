<?php
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum"));
// int(15)

var_dump(array_reduce($a, "product", 10)); 
// int(1200), because: 10*1*2*3*4*5
// 입력한 10도 같이 포함하여 동작함

var_dump(array_reduce($x, "sum", "No data to reduce")); 
// string(17) "No data to reduce"
// 문자열의 갯수 만큼 반복된 17번의 $carry 값이 출력됨
?>
