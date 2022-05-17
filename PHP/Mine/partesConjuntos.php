<?php
    //Dec Array.
    $index = -1;
    $partesConjunto = ["{vacio}", "Conjunto"];

    function numerosTriangulares($num){
        $triNum = ($num*($num+1)) / 2;
        return $triNum;
    }

    function partesConj(){
        global $conjunto;
        global $partesConjunto;
        $indexNext = 2;

        //First elements.
        for($i = 0; $i < count($conjunto); $i++){
            $partesConjunto[$i+2] = "{".$conjunto[$i]."}";
            $indexNext++;
        }

        //Next elements
        for(){
            
        }
    }
    

    function echoPartes(){
        global $partesConjunto, $conjunto;

        $conjuntoString = "{";
        echo "\n\n{";
        foreach($conjunto as $f){
            if($f == end($conjunto)){
                echo $f;
                $conjuntoString = $conjuntoString.$f;
            } else {
                echo $f.", ";
                $conjuntoString = $conjuntoString.$f.", ";
            }
        }
        echo "}\n\n";
        $conjuntoString = $conjuntoString."}";
        echo "\n".$conjuntoString."\n";

        echo "{";
        foreach($partesConjunto as $i){
            if($i == end($partesConjunto)){
                echo $i;
            } else {
                echo $i.", ";
            }
        }
        echo "}";
    }

    //$nombreConjunto = readline("Ingrese el nombre del conjunto: ");
    do{
        global $index;
        $index++;
        $elem = readline("\nEl nuevo elemento va a ser: ");
        
        $conjunto[$index] = $elem;

        $respuesta = strtolower(readline("\nQuiere agregar otro elemento? "));
    } while ($respuesta != 'n' && $respuesta != 'no');

    $cardinalPartes = (pow(2, count($conjunto)));
    echo "\nCantidad de elemtnos de Partes de conjunto es: ".$cardinalPartes."\n";

    partesConj();
    echoPartes();
?>