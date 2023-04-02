<?php
$nilai = "B";


switch ($nilai) {
    case "A":
        echo "Selamat Anda Lulus dengan Predikat sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Mohon Maaf anda belum lulus" . PHP_EOL;
        break;
    default:
        echo "Silahkan coba lagi disemester depan" . PHP_EOL;
        break;
}
