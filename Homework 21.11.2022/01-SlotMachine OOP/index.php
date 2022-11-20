<?php
require_once "vendor/autoload.php";
//require_once "app/SlotMachine.php";

$startingMoney = (int)readline("Enter your starting money: ");

$slotMachine = new App\SlotMachine($startingMoney);
$slotMachine->runSlotMachine();
while (true) {
    $input = readline("To spin type Y (-10$), to end type anything else :");

    if (!($input == "y")) {
        break;
    }
    if ($startingMoney <= 9) {
        echo "Not enough money to continue." . PHP_EOL;
        break;
    }

    $slotMachine->runSlotMachine();
}
