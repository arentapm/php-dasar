<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>

<body>
    <h2>Konversi Nilai </h2>
    <form method="post" action="">
        Masukkan Nilai: <input type="text" name="nilai" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai dari form
        $nilai = $_POST['nilai'];

        // Fungsi untuk konversi nilai ke huruf
        function konversiNilai($nilai)
        {
            if ($nilai >= 90 && $nilai <= 100) {
                return "A";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                return "AB";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                return "B";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                return "BC";
            } elseif ($nilai >= 0 && $nilai <= 59) {
                return "C";
            } else {
                return "Nilai tidak valid";
            }
        }

        // Memanggil fungsi konversi nilai
        $nilaiHuruf = konversiNilai($nilai);

        // Menampilkan hasil konversi
        echo "<p>Nilai kamu $nilai setara dengan $nilaiHuruf</p>";
    }
    ?>
</body>

</html>