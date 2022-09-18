<?php

/**
 * Activity:
 * https://www.codewars.com/kata/5277c8a221e209d3f6000b56
 * Should refactor with a better more compact solution.
 * For now it does what it should, plus showing specific answers to user.
 */

// Only calling file validBraces.php calls necessary functions 

// Debugging
function showArrays($arrays)
{
    // type to give each a name.
    $t = ["parentheses", "brackets", "curly brackets"];
    $i = 0;
    foreach ($arrays as $array) {
        echo "Array [" . $t[$i] . "]: ";

        foreach ($array as $value) {
            echo $value . ", ";
        }
        $i++;
        echo "\n";
    }
    echo "\n";
}

// Actual function.
function validBraces($braces)
{
    $res = true;
    $i = 0;

    if (strlen($braces) % 2 == 0) {
        $aBraces = str_split($braces);
        $p = [0];
        $b = [0];
        $c = [0];

        while ($i < strlen($braces) && $res) {
            $brace = $aBraces[$i];

            if ($brace == ")" || $brace == "]" || $brace == "}") {
                switch ($brace) {
                    case ")":
                        if ($p[0] > 0 && end($c) <= end($p) && end($b) <= end($p)) {
                            array_pop($p);
                            $p[0]--;
                        } else {
                            $res = false;
                        }
                        break;
                    case "]":
                        if ($b[0] > 0 && end($p) <= end($b) && end($c) <= end($b)) {
                            array_pop($b);
                            $b[0]--;
                        } else {
                            $res = false;
                        }
                        break;
                    case "}":
                        if ($c[0] > 0 && end($p) <= end($c) && end($b) <= end($c)) {
                            array_pop($c);
                            $c[0]--;
                        } else {
                            $res = false;
                        }
                        break;
                }
            } else {
                switch ($brace) {
                    case "(":
                        $p[0]++;
                        array_push($p, $i);
                        break;
                    case "[":
                        $b[0]++;
                        array_push($b, $i);
                        break;
                    case "{":
                        $c[0]++;
                        array_push($c, $i);
                        break;
                }
            }

            // Debugging arrays on each iteration.
            /* echo "Iteration " . $i . "\n";
            showArrays([$p, $b, $c]); */
            $i++;
        }

        $res = ($p[0] == 0 && $b[0] == 0 && $c[0] == 0) && $res;
    } else {
        $res = false;
    }

    if ($res) {
        return $res - 1;
    } else {
        return $i;
    }
}

// Giving directions through the cli.
$brackets = readline("Input a sequence of brackets to check if they were closed correctly: \n");
// Calling function.
$index = validBraces($brackets);
// Showing response through console.
if ($index == 0) {
    echo "\nAll brackets are closed correctly.\n";
} else if ($index == -1) {
    echo "\nOdd number of brackets.\nDidn't close or open all brackets.\n";
} else {
    echo "\nWrong bracket closed at {$index}.\n";
}
