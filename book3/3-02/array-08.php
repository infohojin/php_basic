<?php
$records = array(
    array(
        'id' => 2135,
        'first_name' => '홍',
        'last_name' => '길동',
    ),
    array(
        'id' => 3245,
        'first_name' => '이',
        'last_name' => '호진',
    ),
    array(
        'id' => 5342,
        'first_name' => '장',
        'last_name' => '승빈',
    )
);
 
$first_names = array_column($records, 'last_name');
print_r($first_names);
?>
