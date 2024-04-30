<?php
/* Operator logika yang bisa digunakan 
* ==    Sama dengan                     $x == $y
* ===   Identical                       $x === $y
* !=    Tidak sama dengan               $x != $y
* <>    Tidak sama dengan               $x <> $y
* !==   Not dentical $x                 !== $y
* >     Lebih besar dari                $x > $y
* <     Kurang dari                     $x < $y
* >==   Lebih besar atau sama dengan    $x >== $y
* <==   Kurang dari atau sama dengan    $x <== $y
* <=>   Spaceship                       $x <=> $y
*/

$t = date(format: "H"); // Mendapatkan jam dengan format 1-24
echo "if <br>";
if ($t < 12) {
    echo "Selamat Pagi";
}
echo "<br> If dan Else <br>";
if ($t < 16) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}
echo "<br> Nested If <br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} else if ($t < 16) {
    echo "Selamat Siang!";
} else {
    echo "Selamat Malam!";
}
