<?php

$input = readline("Desired sum: ");
echo $input.PHP_EOL;

$result = new RollTwoDice();
$result->rollDice($input);

class RollTwoDice {
    public function rollDice($desiredSum) {
        while (true){
            for ($i = 0; $i < 50; $i++){
                $diceOne = rand(1,6);
                $diceTwo = rand(1,6);
                $result = $diceOne + $diceTwo;
                if (!($diceOne + $diceTwo == $desiredSum)) {
                    echo "$diceOne + $diceTwo = $result" . PHP_EOL;
                }
                if ($result==$desiredSum){
                    echo "$diceOne + $diceTwo = $result" . PHP_EOL;
                    return "$diceOne + $diceTwo = $result" . PHP_EOL;
                }
            }
        }
    }
}