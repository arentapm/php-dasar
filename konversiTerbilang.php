<!DOCTYPE html>
<html>

<head>
    <title>Konversi Angka Terbilang</title>
</head>

<body>
    <h2>Konversi Angka ke Terbilang</h2>
    <form method="post" action="">
        Masukkan angka (1-9):
        <input type="number" name="angka" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];
        $terbilang = "";

        if ($angka >= 1 && $angka <= 9) {
            switch ($angka) {
                case 1:
                    $terbilang = "satu";
                    break;
                case 2:
                    $terbilang = "dua";
                    break;
                case 3:
                    $terbilang = "tiga";
                    break;
                case 4:
                    $terbilang = "empat";
                    break;
                case 5:
                    $terbilang = "lima";
                    break;
                case 6:
                    $terbilang = "enam";
                    break;
                case 7:
                    $terbilang = "tujuh";
                    break;
                case 8:
                    $terbilang = "delapan";
                    break;
                case 9:
                    $terbilang = "sembilan";
                    break;
            }

            echo "Menjadi : " . $terbilang;
        } else {
            echo "Angka diluar rentang (1-9)";
        }
    }
    ?>
</body>

</html>