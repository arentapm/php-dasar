<?php

// Contoh fungsi
function writeMsg($nama)
{
    echo "Selamat datang " . $nama . "<br>";
}

// Memanggil fungsi writeMsg dengan parameter nama
writeMsg("Arenta");

// Fungsi untuk menambahkan dua angka
function tambah(int $angka1, int $angka2)
{
    $a = $angka1 + $angka2;
    return $a; // Mengirim nilai $a ke pemanggil
}

// Memanggil fungsi tambah dengan parameter angka1 dan angka2
$hasil = tambah(5, 30);
echo "Hasil penambahan: " . $hasil; // Menampilkan hasil penambahan
