<?php

$a = 4;
$b = 1;
$c = 3;
$d = 1;

$list = array($a, $b, $c, $d);

$eigenArray = array (
    array($a, $b, $c, $a),
    array($c, $d, $b, $d),
    array($a, $c, $d, $c),
    array($a, $c, $d, $b),
    array($a, $c, $d, $c),
    array($a, $c, $d, $b),
    array($a, $c, $d, $b),
);

/**
 * 
 * 
 * $eigenArray = array (
 *     array($a, $b),
 *     array($c, $d),
 *     array($c, $d)
 * );
 * 
 * $eigenArray = array (
 *     array($a, $b, $c),
 *     array($c, $d, $b),
 *     array($a, $c, $d)
 * );
 * 
 */
$newVal = sizeof($eigenArray, 1) / count($eigenArray);

for($i = 0; $i < count($eigenArray); $i++){
    for($j = 0; $j < $newVal-1; $j++){
        echo $eigenArray[$i][$j]." ";
    }
    echo "\n";
}