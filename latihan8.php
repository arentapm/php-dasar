<?php

// Data kelas dengan array 2 dimensi
$kelas = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "1D" => array("Lukman", "Fajri", "Mahmud")
);

// Menampilkan data array 
echo "Data Kelas:<br>"; // Menampilkan judul "Data Kelas"
foreach ($kelas as $namaKelas => $siswa) { // Melakukan iterasi melalui array $kelas
    echo "$namaKelas:<br>"; // Menampilkan nama kelas dengan judul kelas
    foreach ($siswa as $namaSiswa) { // Melakukan iterasi melalui array siswa di dalam kelas
        echo "- $namaSiswa<br>"; // Menampilkan nama siswa dengan tanda "- "
    }
    echo "<br>"; // Menampilkan baris kosong setelah setiap kelas
}

// Tanda pembatas
echo "--------------------- <br>"; // Menampilkan garis pembatas

// Menampilkan kelas 1C
echo "Kelas 1C:<br>"; // Menampilkan judul kelas
foreach ($kelas['1C'] as $siswa) { // Melakukan iterasi melalui array siswa di dalam kelas 1C
    echo "$siswa<br>"; // Menampilkan nama siswa
}
echo "<br>"; // Menampilkan baris kosong

// Menampilkan kelas 1D dengan index 0
echo "Siswa pertama di kelas 1D: " . $kelas['1D'][0] . "<br>"; // Menampilkan nama siswa pertama di kelas 1D

// Menampilkan siswa kedua di kelas 1D
echo "Siswa kedua di kelas 1D: " . $kelas['1D'][1] . "<br>"; // Menampilkan nama siswa kedua di kelas 1D

// Menampilkan siswa ketiga di kelas 1D
echo "Siswa ketiga di kelas 1D: " . $kelas['1D'][2] . "<br>"; // Menampilkan nama siswa ketiga di kelas 1D

// Data kelas juga bisa ditulis dengan cara berikut
$kelas_sederhana = [
    "1C" => ["Udin", "Ismail", "Adi"], // Data kelas 1C dengan siswa Udin, Ismail, Adi
    "1D" => ["Lukman", "Fajri", "Mahmud"] // Data kelas 1D dengan siswa Lukman, Fajri, Mahmud
];
