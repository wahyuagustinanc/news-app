<?php
function kata_terpanjang($kalimat)
{
    $huruf = explode(" ", $kalimat);
    $hasil = '';

    foreach ($huruf as $word) {
        if (strlen($word) > strlen($hasil)) {
            $hasil = $word;
        }
    }

    echo "Kata terpanjangnya adalah '{$hasil}' dengan " . strlen($hasil) . " karakter.<br>";
}

$kalimat = "Saya sangat senang mengerjakan soal algoritma";

echo "input: {$kalimat}<br>";
kata_terpanjang($kalimat);