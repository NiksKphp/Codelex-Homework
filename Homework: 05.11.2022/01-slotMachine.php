<?php

// Data
$reels = [
    [' ',' ',' ',' '],
    [' ',' ',' ',' '],
    [' ',' ',' ',' '],
];
$earned = 0;
$symbols = ["❂","☎","✱","☢","♬"];

//Functions
function displaySlotMachine(array $reels){
    echo PHP_EOL . " _-_ Slot Machine _-_" . PHP_EOL;
    echo "  | {$reels[0][0]} | {$reels[0][1]} | {$reels[0][2]} | {$reels[0][3]} |";
    echo PHP_EOL . "  -----------------" . PHP_EOL;
    echo "  | {$reels[1][0]} | {$reels[1][1]} | {$reels[1][2]} | {$reels[1][3]} |";
    echo PHP_EOL . "  -----------------" . PHP_EOL;
    echo "  | {$reels[2][0]} | {$reels[2][1]} | {$reels[2][2]} | {$reels[2][3]} |";
    echo PHP_EOL . "  _-_-_-_-_-_-_-_-_" . PHP_EOL;
    echo PHP_EOL;
}

function runSlotMachine(array $reels, array $symbols, int $money, int$lost, int $earned):int {

    //adds winnings to total money
    $money = $earned + $money;

    // Generates random reel content
    for ($i=0; $i<count($reels[0]); $i++) {
        $reels[0][$i]=$symbols[array_rand($symbols, 1)];
        $reels[1][$i]=$symbols[array_rand($symbols, 1)];
        $reels[2][$i]=$symbols[array_rand($symbols, 1)];
    }

    displaySlotMachine($reels);

    //Victory conditions (varbūt var iznest atsevišķā funkcijā)
    //Victory if entire row has identical symbol
    if (count(array_unique($reels[0])) == 1){
        $moneyWon = winnings($reels[0][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! First row symbols are identical" . PHP_EOL;
    }
    if (count(array_unique($reels[1])) == 1){
        $moneyWon = winnings($reels[1][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Second row symbols are identical" . PHP_EOL;
    }
    if (count(array_unique($reels[2])) == 1){
        $moneyWon = winnings($reels[2][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Third row symbols are identical" . PHP_EOL;
    }

    //Victory if symbols are identical in a diagonal
    if (($reels[0][0]==$reels[1][1])&&($reels[1][1]==$reels[1][2])&&($reels[1][2]==$reels[2][3])){
        $moneyWon = winnings($reels[0][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Identical symbols form a diagonal" . PHP_EOL;
    }
    if (($reels[2][0]==$reels[1][1])&&($reels[1][1]==$reels[1][2])&&($reels[1][2]==$reels[0][3])){
        $moneyWon = winnings($reels[2][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Identical symbols form a diagonal" . PHP_EOL;
    }

    //Victory if symbols form zig-zag. -_-_
    if (($reels[0][0]==$reels[1][1])&&($reels[1][1]==$reels[0][2])&&($reels[0][2]==$reels[1][3])){
        $moneyWon = winnings($reels[0][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
    }
    if (($reels[1][0]==$reels[0][1])&&($reels[0][1]==$reels[1][2])&&($reels[1][2]==$reels[0][3])){
        $moneyWon = winnings($reels[1][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
    }
    if (($reels[1][0]==$reels[2][1])&&($reels[2][1]==$reels[1][2])&&($reels[1][2]==$reels[2][3])){
        $moneyWon = winnings($reels[1][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
    }
    if (($reels[2][0]==$reels[1][1])&&($reels[1][1]==$reels[2][2])&&($reels[2][2]==$reels[1][3])){
        $moneyWon = winnings($reels[2][0],$symbols);
        $earned = $earned + $moneyWon;
        echo "You won $moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
    }

    echo "\033[33mMoney total: $money$ \033[0m". PHP_EOL;
    echo "\033[32mEarned: $earned$ \033[0m";
    echo "\033[31mLost: $lost$ \033[0m" . PHP_EOL;

    return $earned;
}

function winnings(string $symbol, array $symbols):int {
    if ($symbol==$symbols[0]){
        return 50;
    }
    if ($symbol==$symbols[1]){
        return 100;
    }
    if ($symbol==$symbols[2]){
        return 150;
    }
    if ($symbol==$symbols[3]){
        return 200;
    }
    if ($symbol==$symbols[4]){
        return 250;
    }
}

//Start slot machine

$money = (int) readline("Enter your starting money: ");
$lost = 0;
$earned = 0;

while (true) {
    $input = readline("To spin type Y (-10$), to end type anything else :");

    if (!($input == "y")) {
        break;
    }
    if ($money <= 9) {
        echo "Not enough money to continue." . PHP_EOL;
        break;
    }

    $money = $money - 10;
    $lost = $lost + 10;
    $earned = runSlotMachine($reels, $symbols, $money, $lost, $earned);
}







