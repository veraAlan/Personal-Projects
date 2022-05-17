<?php
    //Game of guessing a a random number in less than 5 tries.
    //Declare of constants and common strings.
    define("RandNum", rand(0,100));
    define("greater", "The random number is greater.\n\n");
    define("smaller", "The random number is smaller.\n\n");
    define("win", "You got the number!\nThe number was: ".RandNum."\n");
    define("lost", "You didn't guess the number! Better Luck Next Time.\nThe Number was: ".RandNum."\n");

    //Function that sets the value of turns (The amount of tries of guessing the number).
    function diffTurns($difficulty) {
        $turns = 0;
        switch($difficulty){
            case 'easy': $turns = 10; break;
            case 'medium': $turns = 5; break;
            case 'hard': $turns = 3; break;
            case 'custom': $turns = readline("Input the amount of tries: "); break;
        }
        return $turns;
    }

    //Function that decides if player wins, loses or has another try each turn.
    function playTurn(){
        global $Num, $i, $turns;
        if($Num == RandNum){
            echo win;
            $i = $turns + 1;
        } else {
            //If the user used their last try and didn't guess the number, they lose.
            if ($i == $turns - 1) {
                echo lost;
            } else {
                //If they have another try, a hint will be displayed.
                if($Num > RandNum){
                    echo smaller;
                } else {
                    echo greater;
                }
            }
        }
    }

    //Choosing difficulty of the game and setting quantity of turns.
    $difficulty = readline("Please, select a difficulty (EASY - MEDIUM - HARD): ");
    $turns = diffTurns(strtolower($difficulty));

    //Greeting the user.
    $Name = readline("Input your name: ");
    define("Greeting", "Hello there, ".$Name."!");
    echo Greeting."\n\n";
    echo "How about we do a little game.\nYou have ".$turns." tries to guess a random number between 0-100.\n\n";

    //Loop for the asking the number and checking if user wins.
    for ($i=0; $i < $turns; $i++){
        $Num=readline("Choose a number from 0-100: ");
        playTurn();
    }

    echo "\nThe game ended.";
?>