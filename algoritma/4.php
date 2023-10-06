<?php
function diagonal_sum($matrix)
{
    $msg = ['diagonal pertama = ', 'diagonal kedua = '];
    // Pemeriksaan
    $n = count($matrix);
    foreach ($matrix as $row) {
        if (count($row) != $n) {
            throw new Exception('Matriks input harus berupa matriks persegi');
        }
    }

    $sum1 = 0;
    $sum2 = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum1 += $matrix[$i][$i];
        $msg[0] .= $matrix[$i][$i];

        $sum2 += $matrix[$i][$n - $i - 1];
        $msg[1] .= $matrix[$i][$n - $i - 1];

        if ($i == $n - 1) {
            $msg[0] .= " = " . $sum1;
            $msg[1] .= " = " . $sum2;
        } else {
            $msg[0] .= " + ";
            $msg[1] .= " + ";
        }
    }

    $msg[] = "maka hasilnya adalah {$sum1} - {$sum2} = " . ($sum1 - $sum2);
    return array($sum1 - $sum2, $msg);
}

$input_matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]];
echo "Matrix: " . json_encode($input_matrix) . "<br>";

list($result, $message) = diagonal_sum($input_matrix);
echo "Hasil: {$result}<br>";
echo "Penjelasan: " . implode(', ', $message) . "<br>";