<?php
// Fungsi untuk menghitung BMI
function calculateBMI($massa, $tinggi)
{
    return $massa / ($tinggi * $tinggi);
}

// Data 1
$massa_mark_1 = 78; // kg
$tinggi_mark_1 = 1.69; // m

$massa_john_1 = 92; // kg
$tinggi_john_1 = 1.95; // m

// Menghitung BMI menggunakan kedua versi rumus
$bmi_mark_1 = calculateBMI($massa_mark_1, $tinggi_mark_1);
$bmi_john_1 = calculateBMI($massa_john_1, $tinggi_john_1);

// Menentukan apakah Mark memiliki BMI lebih tinggi dari John
$markHigherBMI_1 = $bmi_mark_1 > $bmi_john_1;

// Data 2
$massa_mark_2 = 95; // kg
$tinggi_mark_2 = 1.88; // m

$massa_john_2 = 85; // kg
$tinggi_john_2 = 1.76; // m

// Menghitung BMI menggunakan kedua versi rumus
$bmi_mark_2 = calculateBMI($massa_mark_2, $tinggi_mark_2);
$bmi_john_2 = calculateBMI($massa_john_2, $tinggi_john_2);

// Menentukan apakah Mark memiliki BMI lebih tinggi dari John
$markHigherBMI_2 = $bmi_mark_2 > $bmi_john_2;

// Menampilkan hasil
echo "Data 1:\n";
echo "BMI Mark: $bmi_mark_1\n";
echo "BMI John: $bmi_john_1\n";
if ($markHigherBMI_1) {
    echo "Mark memiliki BMI lebih tinggi dari John\n";
} else {
    echo "Mark memiliki BMI lebih rendah dari John\n";
}


echo "\nData 2:\n";
echo "BMI Mark: $bmi_mark_2\n";
echo "BMI John: $bmi_john_2\n";
if ($markHigherBMI_2) {
    echo "Mark memiliki BMI lebih tinggi dari John\n";
} else {
    echo "Mark memiliki BMI lebih rendah dari John\n";
}
