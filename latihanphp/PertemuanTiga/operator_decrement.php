<?php
##################################
# Pertemuan : 3
# Nama File : operator_decrement.php
#################################

echo "Masukan Nilai a: ";
$a = fgets(STDIN);

echo "Pre-Increment \n";
echo "Nilai". $a . " sebelum dikurang : " . $a . "\n";
echo "Nilai --$a ". --$a . "\n";
echo "Nilai setelah dikurang: " .$a . "\n";

echo "\n";
# Mengembalikan nilai $a ke nilai 5;
// $al = 5;
echo "Post-decrement \n";
echo "Nilai" . $a . "sebelum dikurang : " . $a . "\n";
echo "Nilai $a-- : " . $a-- . "\n";
echo "Nilai setelah dikurang: " .$a-- . "\n";

?>