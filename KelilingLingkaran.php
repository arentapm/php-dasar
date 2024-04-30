<?php
// Definisikan jari-jari lingkaran
$jari_jari = 20;

// Hitung keliling lingkaran
$keliling = 2 * M_PI * $jari_jari;

// Bulatkan hasil keliling
$keliling_bulat = round($keliling, 2); // Bulatkan ke 2 angka desimal

// Tampilkan hasil
echo "Keliling lingkaran dengan jari-jari $jari_jari cm adalah: " . $keliling_bulat . " cm";
