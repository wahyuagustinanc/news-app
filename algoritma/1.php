<?php
$input = "NEGIE1";

// Memisahkan angka dari huruf
$huruf = preg_replace('/[^a-zA-Z]/', '', $input);
$angka = preg_replace('/[^0-9]/', '', $input);

// Membalikkan urutan huruf
$reverse_huruf = strrev($huruf);

// Menggabungkan huruf yang sudah dibalik dengan angka
$output = $reverse_huruf . $angka;

echo 'input: ' . $input . '<br>';
echo 'output: ' . $output;