<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".";

//Tampilan Mangga
echo "<br>Saya suka " . $namaBuah[1] . ".";

//Tampilan Jeruk 
echo "<br>Saya suka " . $namaBuah[2] . ".";

//Tampilan Apel
echo "<br>Saya suka " . $namaBuah[3] . ".";

//Tampilan Melon
echo "<br>Saya suka " . $namaBuah[4] . ".";

// array dengan spesifikasi index
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "Tahun");
$umur['Ahmad'] = "50 Tahun";

// Tampilan semua umur
echo "<br>Umur Andi adalah " . $umur['Andi'] . ". ";
echo "<br>Umur Ben adalah " . $umur['Ben'] . ". ";
echo "<br>Umur Joe adalah " . $umur['Joe'] . ". ";
echo "<br>Umur Ahmad adalah " . $umur['Ahmad'] . ". ";
