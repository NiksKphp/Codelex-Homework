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
echo "debug: " . $wordToGuess . PHP_EOL;

while (true){
    $input = readline("Input letter: ");
    echo PHP_EOL;

    if (in_array($input,$misses)){
        echo "DOUBLE" . PHP_EOL;
    }

    if (strpos($wordToGuess, $input) !== false){
       $keypos = strpos($wordToGuess, $input);
       $wordTemplate[$keypos]=$input;
        echo "Word: " . $wordTemplate;
    } else {
        echo "Word: " . $wordTemplate;
        echo PHP_EOL;
        echo "Misses: ";
        array_push($misses,$input);
        foreach ($misses as $miss){
            echo $miss;
        }
        echo PHP_EOL;
    }

    if ($input==$wordToGuess) {
        echo "Word is correct" . PHP_EOL;
        exit;
    }

    echo PHP_EOL;
}







