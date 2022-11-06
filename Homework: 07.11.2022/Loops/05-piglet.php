<?php

$input = readline("Welcome to Piglet! To start type Y: ");
$score = 0;
while (true){
    if (!($input=="Y")){
        exit;
    }
    if ($input=="Y"){

        $input = readline("Type Y to roll, E to exit : ");
        echo PHP_EOL . "_______" . PHP_EOL;
        if ($input=="E"){
            echo "Game end. Your score is $score." . PHP_EOL;
            exit;
        }
        if ($input=="Y"){
            $score++;
            $result = new Piglet();
            $result->fizzyBuzz();
            echo " Your score is $score." . PHP_EOL;
        }
    }
}

class Piglet {
    public function fizzyBuzz() {
        $roll = rand(1,6);
        if ($roll >= 2) {
            echo "You rolled $roll!";
        }
        if ($roll==1){
            echo "You rolled 1, you lose." . PHP_EOL;
            exit;
        }
    }
}
