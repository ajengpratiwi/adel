<?php
// Fungsi untuk mencetak bilangan dari 1 sampai n
function printNumbers($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo $i;
        if ($i < $n) {
            echo ",";
        }
    }
}

// Mendefinisikan nilai n
$n = 20;

// Memanggil fungsi untuk mencetak bilangan dari 1 sampai n
printNumbers($n);
?>
