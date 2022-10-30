<?php

/*
Write a program to play a word-guessing game like Hangman.

    It must randomly choose a word from a list of words.
    It must stop when all the letters are guessed.
    It must give them limited tries and stop after they run out.
    It must display letters they have already guessed (either only the incorrect guesses or all guesses).

 */

//$words = ["word","table","code","fish","key"];
$words = ["key"];
$wordToGuess = $words[array_rand($words)];
$wordTemplate = str_repeat("-",strlen($words[0]));
$seperator = "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
$misses = [];
$tries = 3;
echo "debug: " . $wordToGuess . PHP_EOL;

while (true) {
    $input = readline("Guess: ");
    $keypos = strpos($wordToGuess, $input);

    //validate input
    if ((in_array($input, $misses)) || ($wordTemplate[$keypos] == $input)) {
        echo PHP_EOL . "This character was already used" . PHP_EOL;
    }

    if (strpos($wordToGuess, $input) !== false) {
        $wordTemplate[$keypos] = $input;
    } else {
        echo "Word: " . $wordTemplate . PHP_EOL;
        echo "Misses: ";
        array_push($misses, $input);
        $tries--;
    }

    echo PHP_EOL;

    if (!(strpos($wordTemplate, "-") !== false)) {
        echo $seperator . PHP_EOL;
        echo "Word: " . $wordToGuess . PHP_EOL;
        echo PHP_EOL . "YOU GOT IT!" . PHP_EOL;
        $again = readline("Play again or exit?: ");
            if ($again == "again"){
                continue;
            }
            if ($again == "exit"){
                exit;
            }
    }

    if ($tries == 0) {
        echo "You ran out of tries" . PHP_EOL;
        exit;
    }


    echo $seperator . PHP_EOL;
    echo "Word: " . $wordTemplate . PHP_EOL;
    echo "Misses: ";

    foreach ($misses as $miss) {
        echo $miss;
    }
    echo PHP_EOL. PHP_EOL;
}




