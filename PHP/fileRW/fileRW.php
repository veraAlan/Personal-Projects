<?php
    //Program that asks user to input 
    //strings that will be written to a file.
    $filePath = file('D://Coding//PHP Projects//fileRW//newFile.txt');

    if(){
        $workingFile = fopen($filePath, "r+");
    } else {

    }
    do{
        

        $resp = readline("\nWanna input another line? ");
    }while($resp == 'y');

    fclose($workingFile);
?>