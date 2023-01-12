<?php

#########
#Pertemuan :3
#Nama File: constanta.php
#########

echo "Menghitung Volume Bola \n";
echo "--------------\n";

// Menggunakan const
const PI = 3.14;
echo "Masukkan Jari-jari bola : ";
$r = 4;
$volume = PI * $r * $r* $r;
echo"rumus Volume bola adalah V = 3.14 * r*r*r \n";
echo "Volume bola adalah " . $volume . "<br>";


// Menggunakan fungsi define()
// parameter 1 menyatakan nama konstanta
// parameter 2 menyatakan nilai konstanta
echo "Menghitung Luas Permukaan Bola  <br>";
echo "----------\n";
define('phi', 3.14);
echo "Masukkan Jari-jari bola : ";
$r1 = 4;
$luas_permukaan_bola = 4* PI * $r1 * $r1;
echo "rumus luas permukaan bola adalah Lp = 4 * PI * r * r \n";
echo "Luas Permukaan bola adalah " .$luas_permukaan_bola . "\n";



//apaya
define("Konstanta ", "Hah");
echo Konstanta, "<br>";
echo constant("Konstanta")


?>

