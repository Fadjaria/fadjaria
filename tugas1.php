<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trofi Championship</title>
</head>
<body>
    <h1>Trofi Championship</h1>
    <?php
    // Fungsi untuk menghitung skor rata-rata tim
    function hitungRataRata($skor) {
        return array_sum($skor) / count($skor); 
    }

    // Fungsi untuk menentukan pemenang
    function tentukanPemenang($skor_lumba, $skor_koala, $skor_minimum) {
        $rata_rata_lumba = hitungRataRata($skor_lumba);
        $rata_rata_koala = hitungRataRata($skor_koala);

        // Tentukan pemenang berdasarkan skor rata-rata dan skor minimum
        if ($rata_rata_lumba > $rata_rata_koala && $rata_rata_lumba >= $skor_minimum) {
            return "Tim Lumba-lumba memenangkan trofi!";
        } elseif ($rata_rata_koala > $rata_rata_lumba && $rata_rata_koala >= $skor_minimum) {
            return "Tim Koala memenangkan trofi!";
        } elseif ($rata_rata_lumba == $rata_rata_koala && $rata_rata_lumba >= $skor_minimum && $rata_rata_koala >= $skor_minimum) {
            return "Hasil seri!";
        } else {
            return "Tidak ada tim yang memenangkan trofi!";
        }
    }

    // Data uji
    $data_1_lumba = [96, 108, 89];
    $data_1_koala = [88, 91, 110];
    $data_bonus_1_lumba = [97, 112, 101];
    $data_bonus_1_koala = [109, 95, 123];
    $data_bonus_2_lumba = [97, 112, 101];
    $data_bonus_2_koala = [109, 95, 106];

    // Skor minimum
    $skor_minimum = 100;

    // Menampilkan hasil untuk data uji 1
    echo "<h2>Data 1:</h2>";
    echo "<p>Lumba-lumba (96,108,89): " . hitungRataRata($data_1_lumba) . "</p>";
    echo "<p>Koala (88,91,110): " . hitungRataRata($data_1_koala) . "</p>";
    echo "<p>Hasil: " . tentukanPemenang($data_1_lumba, $data_1_koala, $skor_minimum) . "</p>";

    // Menampilkan hasil untuk data bonus 1
    echo "<h2>Data Bonus 1:</h2>";
    echo "<p>Lumba-lumba (97,112,101): " . hitungRataRata($data_bonus_1_lumba) . "</p>";
    echo "<p>Koala (109,95,123): " . hitungRataRata($data_bonus_1_koala) . "</p>";
    echo "<p>" . tentukanPemenang($data_bonus_1_lumba, $data_bonus_1_koala, $skor_minimum) . "</p>";

    // Menampilkan hasil untuk data bonus 2
    echo "<h2>Data Bonus 2:</h2>";
    echo "<p>Lumba-lumba (97,112,101): " . hitungRataRata($data_bonus_2_lumba) . "</p>";
    echo "<p>Koala (109,95,106): " . hitungRataRata($data_bonus_2_koala) . "</p>";
    echo "<p>" . tentukanPemenang($data_bonus_2_lumba, $data_bonus_2_koala, $skor_minimum) . "</p>";
    ?>
</body>
</html>
