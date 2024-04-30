<?php
//while loop
$x = 10;
while ($x > 5) {
    echo "Nomor (while loop): $x<br>";
    $x--;
}

// do while
$x = 1;
do {
    echo "Nomor (do while loop): $x <br>";
    $x++;
} while ($x <= 5);

//foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value (foreach loop)<br>";
}

//for
for ($x = 0; $x < 10; $x++) {
    echo "Nomor (for loop): $x <br>";
}

//for dengan break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor (for loop dengan break): $x <br>";
}
