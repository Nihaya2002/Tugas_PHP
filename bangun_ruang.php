<?php
echo "Menghitung Luas Bangun Ruang<br><br>";
$sisi = 5;
$volume = $sisi * $sisi * $sisi;
echo "Volume kubus dengan sisi $sisi adalah = $volume<br>";
echo "----------------------------------------------------------------<br>";
$panjang = 20;
$lebar = 5;
$tinggi = 2;
$volume = $panjang * $lebar * $tinggi;
echo "Volume balok dengan p $panjang, l $lebar dan t $tinggi adalah = $volume <br>";
echo "-----------------------------------------------------------------<br>";
$jari_jari = 5;
$tinggi = 10;
$phi = 3.14;
$volume = $phi * $jari_jari * $jari_jari * $tinggi;
echo "Volume tabung dengan r $jari_jari t $tinggi phi $phi adalah = $volume<br>";
echo "-----------------------------------------------------------------<br>";
?>