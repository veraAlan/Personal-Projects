<?php
    /*
    $name = file('ladosRectangulo');

    foreach ($name as $line_num => $line) {
        echo "Lado mayor: ".$line."\nLado menor: ".($line + 1)."\n";
    }

    fopen($name, r+, );

    do{
        echo "Ingrese el lado mayor del rectangulo: ";
        $ladoB = trim(fgets(STDIN));
        echo "\nIngrese el lado menor del rectangulo: ";
        $ladoA = trim(fgets(STDIN));

    } while($resp != 'no' || $resp != 'n');

    

    function areaRect(){
        global $ladoA, $ladoB;
        $area = $ladoA * $ladoB;
        return $area;
    }

    echo "\nEl area del rectangulo es: ".areaRect();
    
    $pi = (double)readline("Input pi: ");
    echo "Input pi for fgets: ";
    $piGets = (double)trim(fgets(STDIN));

    echo "PI pi(): ".pi()." y es tipo: ".gettype(pi());
    echo "\nPI readline: ".$pi." y es tipo: ".gettype($pi);
    echo "\nPI trim(fgets()): ".$piGets." y es tipo: ".gettype($piGets);
    */

    $pi = pi(); //const M_PI
    $piEqual = 3.14159265358979323846;
    $piOutput = 3.1415926535898;

    if(round($piEqual, 13) === $pi){
        echo "TRUE";
        echo "\nThe value ". 3.14159265358979323846 ." is exactly equal to ".pi();
    } else {
        //$piOutput
        echo "FALSE";
        echo "\nThe value ". 3.1415926535898 ." is not exactly equal to ".pi();
    }
    echo "\n".gettype(3.1415926535898);
    echo "\n".gettype(pi());
    echo "\n".gettype($pi)
?>