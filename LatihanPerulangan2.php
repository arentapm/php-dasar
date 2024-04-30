<?php
$angka = array(12, 14, 15, 16, 67, 189, 346, 876, 54232, 3256);

foreach ($angka as $nomor) {
    if ($nomor % 2 == 0) {
        echo "Nomor $nomor : genap<br>";
    } else {
        echo "Nomor $nomor : ganjil<br>";
    }
}
