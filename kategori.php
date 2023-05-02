<?php
echo "Menghitung BMI<br><br>";
$nama = "Nihayatun Niamah";
$tinggi = 159/100;
$berat = 48;
$bmi = $berat / ($tinggi*$tinggi);
echo "halo, $nama. nilai BMI anda adalah $bmi, anda termasuk ";

if ($bmi <= 18.5) {
   echo "kurus";
}
elseif ($bmi <= 24.9) {
    echo "sedang";
}
elseif ($bmi <= 29) {
    echo "gemuk";
}
elseif ($bmi >= 30) {
    echo "obesitas";
}


?>