<?php

$x = 70;
$y = 10;

// Operator Aritmatika
echo "Penambahan " . ($x + $y) . "<br>";
echo "Pengurangan " . ($x - $y) . "<br>";
echo "Perkalian " . ($x * $y) . "<br>";
echo "Pembagian " . ($x / $y) . "<br>";
echo "Modulus " . ($x % $y) . "<br>";
echo "Pangkat " . ($x ** $y) . "<br>"; // Mengubah "Exponensial" menjadi "Pangkat"
echo "<br>";

// Operator Penugasan
$x += 2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x " . $x . "<br>";
echo "Perkalian y " . $y . "<br>";
echo "<br>";

// Operator Incremen/Dekremen
echo "Isi ++x = " . ++$x . "<br>";
echo "Isi x++ = " . $x++ . "<br>";
echo "Isi x = " . $x . "<br>";
echo "<br>";
echo "Isi --y = " . --$y . "<br>";
echo "Isi y-- = " . $y-- . "<br>";
echo "Isi y = " . $y . "<br>";
echo "<br>";

// Operator Penugasan Bersyarat
$user = "Arenta Putri Maharani";
// <Kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";

// Variabel $color akan diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";
