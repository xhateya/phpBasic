<?php

// // STANDAR OUTPUT
// //echo, print
// //print_r
// //var_dump

// //echo
// echo "Dazai Osamu <br>";
// echo "ini ", "teks ", "yang ", "dipisah <br>";
// echo "Ini " ."Teks";


// //print
// print "Dazai Osamu";
// // print "Dazai"


// //print_r
// $nama_siswa = array("Teya", "Adeeva", "Salsa", "Lady", "Wanda", "Nasywa", "Marsya", "Khesya", "Qonita");
// print_r($nama_siswa);

// //var dump
// var_dump("Dazai Osamu");



//Penulisan Sintaks PHP
//1. PHP didalam HTML
//2. HTML didalam PHP
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    
<!-- php didalam html -->
    <h1>Halo, Welcome <?php echo "Dazai";?></h1>
    <p><?php echo "Ini adalah lumba-lumba";?></p>

<!-- html didalem php -->
    <?php
    echo "<h1>Welcome Dazai's Osamu</h1>";
    ?>
    
</body>
</html>