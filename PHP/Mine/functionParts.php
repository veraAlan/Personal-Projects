<?php
    $set = ['a', 'b', 'c', 'd'];

    for($d = 0; $d < (count($set)-2); $d++){
        for($i = 0; $i < count($set)-$d; $i++){
            echo $set[$i];
            for($j=$i+1; $j < count($set)-$d; $j++){
                echo $set[$j];
                for($k=$j+2; $k < count($set)-$d-1; $k++){
                    echo $set[$k];
                }
            }
            echo "\n";
        }
    }
?>