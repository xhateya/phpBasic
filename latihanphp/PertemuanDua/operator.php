<?php
// Pertemuan 2 - Latihan php
//operator



//operator aritmatika
// +, - *, /, %
$a = 10;
$b = 5;

$c = $a * $b;
// echo "$c";

//Operator Relation
$d = $a > $b;
echo "$a > $b : $d";


// $g = $a < $b;
// echo "$a < $b : $g";

//Operator Logika
// &&, ||, !

$x= 10;
var_dump($x > 20 && $x %2 == 0);

var_dump($x >! 20);

?>