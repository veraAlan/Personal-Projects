<?php

/**
 * Activity:
 * https://www.codewars.com/kata/556deca17c58da83c00002db/train/php
 */

function tribonacci($signature, $n)
{
    $result = [];

    // Add first values of array.
    for ($i = 0; $i < $n && $i < 3; $i++) {
        array_push($result, $signature[$i]);
    }

    // If n is greater than 3, add values following Tribonacci's formula.
    for (; $i < $n; $i++) {
        $signature[3] = $signature[0] + $signature[1] + $signature[2];
        array_shift($signature);
        array_push($result, $signature[2]);
    }

    return $result;
}

echo "\nTribonacci.\n\n";

echo "Input 3 signature values: (After each value press Enter)\n";
$values[0] = trim(fgets(STDIN));
$values[1] = trim(fgets(STDIN));
$values[2] = trim(fgets(STDIN));

$n = readline("\nHow many elements to show: ");
$result = tribonacci($values, $n);

echo "\nResult: [";
foreach ($result as $val) {
    echo $val;
    if (next($result)) {
        echo ",";
    }
}
echo "]\n";
