<?php
// Fungsi untuk menentukan apakah bilangan adalah genap atau ganjil
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Bilangan Genap";
    } else {
        return "Bilangan Ganjil";
    }
}

// Mendefinisikan nilai input
$input1 = 7;
$input2 = 10;

// Memanggil fungsi untuk menentukan dan mencetak hasil
echo "Input: $input1 - " . checkEvenOrOdd($input1) . "\n";
echo "Input: $input2 - " . checkEvenOrOdd($input2) . "\n";
?>
