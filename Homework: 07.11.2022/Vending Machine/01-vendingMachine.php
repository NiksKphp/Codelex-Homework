<?php
//declare(strict_types = 1);

//$products = [
//    "Chips" => 200,
//    "Cola" => 150,
//    "Vegetables" => 100
//];

$products = [
    ['Chips', 200],
    ['Cola', 150],
    ['Chocolate', 125],
    ['Vegetables', 100],
    ['Water', 50],
];


function moneyFormatter($money):string {
    $money = $money/100;
    return number_format($money, 2, ',', '.') . "€";
}

$money = enterCoins();
function enterCoins(){
    $input = 0;
    $money = 0;
    while (!($input==9)) {
        echo "Money entered total: " . moneyFormatter($money) . PHP_EOL;
        echo "Type 1 to add 2 Euro coin," . PHP_EOL;
        echo "Type 2 to add 1 Euro coin," . PHP_EOL;
        echo "Type 3 to add 50 cent coin," . PHP_EOL;
        echo "Type 4 to add 20 Euro coin," . PHP_EOL;
        echo "Type 5 to add 10 Euro coin," . PHP_EOL;
        echo "Type 6 to add 5 cent coin," . PHP_EOL;
        echo "Type 7 to add 2 Euro coin," . PHP_EOL;
        echo "Type 8 to add 1 Euro coin," . PHP_EOL;
        echo "Type 9 to choose product" . PHP_EOL;
        $input = readline("Selection: ");
        if ($input==1){
            $money = $money + 200;
        }
        if ($input==2){
            $money = $money + 100;
        }
        if ($input==3){
            $money = $money + 50;
        }
        if ($input==4){
            $money = $money + 20;
        }
        if ($input==5){
            $money = $money + 10;
        }
        if ($input==6){
            $money = $money + 5;
        }
        if ($input==7){
            $money = $money + 2;
        }
        if ($input==8){
            $money = $money + 1;
        }
    }
    return $money;
}

displayProducts($products);
function displayProducts($products){
    echo PHP_EOL . "Products: " . PHP_EOL;
    $key = 1;
    for ($i=0;$i<5;$i++){
        echo $key++ . ": ".$products[$i][0].". Price: " . moneyFormatter($products[$i][1]) . PHP_EOL;
    }
}

echo PHP_EOL;
$choice = (int) readline("Choose product by typing the number: ");
echo PHP_EOL;

$moneyToBeReturned = $money - $products[$choice-1][1];

if ($choice == 1){
    $moneyToBeReturned = $money - 200;
}
if ($choice == 2){
    $moneyToBeReturned = $money - 150;
}
if ($choice == 3){
    $moneyToBeReturned = $money - 100;
}

$coinsReturned = changeCalc($moneyToBeReturned);

function vendingMachineCoins(int $coinToCheck):bool{
    $vendingMachineCoins = [
        200=>10,
        100=>10,
        50=>10,
        20=>10,
        10=>10,
        5=>10,
        2=>10,
        1=>10,
    ];

    if ($vendingMachineCoins[$coinToCheck]>1){
        $vendingMachineCoins[$coinToCheck]--;
        return true;

    } else {
        return false;
    }
}

function changeCalc(int $moneyToBeReturned):string {

    $coins = [
        200=>0,
        100=>0,
        50=>0,
        20=>0,
        10=>0,
        5=>0,
        2=>0,
        1=>0,
    ];

    $totalToReturn = $moneyToBeReturned;

    while(true) {
        if (($moneyToBeReturned >= 200) && (vendingMachineCoins(200))) {
            $coins[200]++;
            $moneyToBeReturned = $moneyToBeReturned - 200;
            continue;
        }
        if (($moneyToBeReturned >= 100) && (vendingMachineCoins(200))) {
            $coins[100]++;
            $moneyToBeReturned = $moneyToBeReturned - 100;
            continue;
        }
        if (($moneyToBeReturned >= 50) && (vendingMachineCoins(200))) {
            $coins[50]++;
            $moneyToBeReturned = $moneyToBeReturned - 50;
            continue;
        }
        if (($moneyToBeReturned >= 10) && (vendingMachineCoins(200))) {
            $coins[10]++;
            $moneyToBeReturned = $moneyToBeReturned - 10;
            continue;
        }
        if (($moneyToBeReturned >= 5) && (vendingMachineCoins(200))) {
            $coins[5]++;
            $moneyToBeReturned = $moneyToBeReturned - 5;
            continue;
        }
        if (($moneyToBeReturned >= 2) && (vendingMachineCoins(200))) {
            $coins[2]++;
            $moneyToBeReturned = $moneyToBeReturned - 2;
            continue;
        }
        if (($moneyToBeReturned >= 1) && (vendingMachineCoins(200))) {
            $coins[1]++;
            $moneyToBeReturned = $moneyToBeReturned - 1;
            continue;
        }

        return "Total money returned: ". moneyFormatter($totalToReturn) . PHP_EOL .
            "2 Euro coins: $coins[200]" . PHP_EOL .
            "1 Euro coins: $coins[100]" . PHP_EOL .
            "50 Cent coins: $coins[50]" . PHP_EOL .
            "20 Cent coins: $coins[20]" . PHP_EOL .
            "10 Cent coins: $coins[10]" . PHP_EOL .
            "5 Cent coins: $coins[5]" . PHP_EOL .
            "2 Cent coins: $coins[2]" . PHP_EOL .
            "1 Cent coins: $coins[1]" . PHP_EOL;
    }
}

echo $coinsReturned;
