<!DOCTYPE html>
<body>
    <?php

        //Getting array of names and showing them as a list in output.
        $nameQuantity = 0;
        do{
            $nameQuantity++;
            echo "Name number ".$nameQuantity.": ";


            $nameArray[] = readline("Input the name: ");
            echo "\n";

            $resp = strtolower(readline("Do you wanna input another name?"));
        }while($resp != 'n' && $resp != 'no');

        //Loop to arrange array from less amount of letter to max.
        foreach ($nameArray as $i) {
            
        }

        foreach ($nameArray as $i) {
            echo $i."\n";
        }
    ?>
</body>