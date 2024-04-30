<?php

// Fungsi untuk menghitung banyaknya pecahan uang
function hitungPecahan($jumlah, $pecahan)
{
    $banyaknya = floor($jumlah / $pecahan);
    $jumlah -= $banyaknya * $pecahan;
    return array($banyaknya, $jumlah);
}

// Jumlah uang yang akan diambil
$jumlah_uang = 1387500;

// Pecahan uang yang berlaku
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Variabel untuk menyimpan banyaknya masing-masing pecahan uang
$banyak_pecahan = array();

// Menghitung banyaknya masing-masing pecahan uang
foreach ($pecahan as $p) {
    if ($p == 500) {
        list($banyak, $jumlah_uang) = hitungPecahan($jumlah_uang, $p);
        $banyak_pecahan[$p] = $banyak;
    } else {
        list($banyak, $jumlah_uang) = hitungPecahan($jumlah_uang, $p);
        $banyak_pecahan[$p] = $banyak;
    }
}

// Menampilkan hasil dengan tag <br> untuk baris baru
foreach ($banyak_pecahan as $p => $banyak) {
    if ($p == 500) {
        echo "Pecahan Rp. " . number_format($p) . " : " . $banyak . " koin<br>";
    } else {
        echo "Pecahan Rp. " . number_format($p) . " : " . $banyak . " lembar<br>";
    }
}
