<?php

// $nilai = array(1, 2, 3, 4, 5);
// var_dump($nilai);

$nama = ["Gina", "Khayatun", "Nugus"];
var_dump($nama);

//mengubah index ke 0
$nama[0] = "Gita";
var_dump($nama);

//menghapus data
unset($nama[1]);
var_dump($nama);

//menambahkan data array
$nama[] = "Gina";
var_dump($nama);
var_dump(count($nama));
