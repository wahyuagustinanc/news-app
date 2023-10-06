<?php
function query_in_input($array_input, $array_query)
{
    $output = [];
    $msg = [];

    foreach ($array_query as $q) {
        $count = 0;

        foreach ($array_input as $string) {
            if ($q == $string) {
                $count++;
            }
        }

        if ($count == 0) {
            $msg[] = "kata {$q} tidak ada pada INPUT";
        } else {
            $msg[] = "kata {$q} terdapat {$count} pada INPUT";
        }

        $output[] = $count;
    }

    return array($output, $msg);
}

$input = ['xc', 'dz', 'bbb', 'dz'];
echo "INPUT: " . json_encode($input) . "<br>";

$query = ['bbb', 'ac', 'dz'];
echo "QUERY: " . json_encode($query) . "<br>";

list($output, $message) = query_in_input($input, $query);
echo "hasil: " . json_encode($output) . "<br>";
echo "penjelasan: " . implode(', ', $message) . "<br>";