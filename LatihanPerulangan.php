<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
    <style>
        .pattern {
            font-size: 24px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="pattern">
        <?php
        // Menampilkan pola bintang
        for ($i = 1; $i <= 20; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>