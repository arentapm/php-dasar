<?php

// Definisikan array untuk menyimpan data siswa
$siswa = array(
    array("no_urut" => 1, "poin" => 75, "siswa" => "Adi"),
    array("no_urut" => 2, "poin" => 80, "siswa" => "Joni"),
    array("no_urut" => 3, "poin" => 65, "siswa" => "Jihan"),
    array("no_urut" => 4, "poin" => 70, "siswa" => "Aya"),
    array("no_urut" => 5, "poin" => 85, "siswa" => "Ita"),
    array("no_urut" => 6, "poin" => 90, "siswa" => "Budi"),
    array("no_urut" => 7, "poin" => 95, "siswa" => "Tini"),
    array("no_urut" => 8, "poin" => 65, "siswa" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "a) Poin siswa dengan nomor urut 5: <br> " . $siswa[4]['poin'] . "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "b) Nama siswa yang memiliki poin 90: <br>";
foreach ($siswa as $data) {
    if ($data['poin'] == 90) {
        echo $data['siswa'] . "<br>";
    }
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "c) Nama siswa yang memiliki poin 100: <br>";
$found = false;
foreach ($siswa as $data) {
    if ($data['poin'] == 100) {
        echo $data['siswa'] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada<br>";
}
