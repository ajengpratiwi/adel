<?php
// Pemetaan huruf
$mapping = [
    'ha' => 'pa', 'na' => 'dha', 'ca' => 'ja', 'ra' => 'ya', 'ka' => 'nya',
    'da' => 'ma', 'ta' => 'ga', 'sa' => 'ba', 'wa' => 'tha', 'la' => 'nga',
    'pa' => 'ha', 'dha' => 'na', 'ja' => 'ca', 'ya' => 'ra', 'nya' => 'ka',
    'ma' => 'da', 'ga' => 'ta', 'ba' => 'sa', 'tha' => 'wa', 'nga' => 'la'
];

// Fungsi untuk memisahkan kata menjadi suku kata
function splitIntoSyllables($word) {
    $length = strlen($word);
    $syllables = [];
    $i = 0;

    while ($i < $length) {
        // Jika panjang sisa kata adalah 1, tambahkan sebagai suku kata terakhir
        if ($i + 1 < $length) {
            $syllables[] = substr($word, $i, 2);
            $i += 2;
        } else {
            $syllables[] = substr($word, $i, 1);
            $i += 1;
        }
    }

    return $syllables;
}

function translateDagadu($word, $mapping) {
    // Memecah kata menjadi suku kata
    $syllables = splitIntoSyllables($word);
    $result = "";

    foreach ($syllables as $syllable) {
        // Memeriksa apakah suku kata ada dalam pemetaan
        if (isset($mapping[$syllable])) {
            $result .= $mapping[$syllable];
        } else {
            // Jika tidak ada dalam pemetaan, ubah menjadi huruf pertama dari suku kata tersebut
            $firstChar = substr($syllable, 0, 1);
            $result .= $firstChar;
        }
    }

    return $result;
}

// Contoh penggunaan
$input1 = "matamu"; // dagamu
$input2 = "mangan"; // daladh
$input3 = "bapak"; // sahany
$input4 = "mas"; // dab

echo "Input: $input1 - Output: " . translateDagadu($input1, $mapping) . "\n";
echo "Input: $input2 - Output: " . translateDagadu($input2, $mapping) . "\n";
echo "Input: $input3 - Output: " . translateDagadu($input3, $mapping) . "\n";
echo "Input: $input4 - Output: " . translateDagadu($input4, $mapping) . "\n";
?>