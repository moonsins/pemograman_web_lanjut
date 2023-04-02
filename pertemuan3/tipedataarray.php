<?php

// $nilai = array(1, 2, 3, 4, 5);
// var_dump($nilai);

$nama = ["Muhammad", "Fauzan"];
var_dump($nama);

//mengubah index ke 0
$nama[0] = "Muhammad Fauzan";
var_dump($nama);

//menghapus data
unset($nama[1]);
var_dump($nama);

//menambahkan data array
$nama[] = "Fauzan";
var_dump($nama);
var_dump(count($nama));
