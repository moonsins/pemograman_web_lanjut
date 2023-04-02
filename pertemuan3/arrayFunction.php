<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataresult = array_map(fn (int $value) => $value * 10, $data);
var_dump($dataresult);

//untuk ngurutkan array secara disc 

rsort($data);
var_dump($data);

//jika ingin mengambil key saja
var_dump(array_keys($data));

//jika ingin mengambil values saja
var_dump(array_values($data));
