<?php

require_once "Game.php";
require_once "Element.php";


$rock = New Element('Rock');
$paper = New Element('Paper');
$scissors = New Element('Scissors');
$lizard = New Element('Lizard');
$spock = New Element('Spock');

$scissors->setBeats($paper);
$scissors->setBeats($lizard);
$paper->setBeats($rock);
$paper->setBeats($spock);
$rock->setBeats($lizard);
$rock->setBeats($scissors);
$lizard->setBeats($spock);
$lizard->setBeats($paper);
$spock->setBeats($scissors);
$spock->setBeats($rock);

$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock
];


//Run AI vs AI n times
$n = 10;

for ($i=0;$i<$n;$i++){
    $selectedElement = $elements[array_rand($elements)];
    $opponentElement = $elements[array_rand($elements)];

    $game = new Game ($selectedElement,$opponentElement);
    $winner = $game->getWinner();

    echo "{$selectedElement->getName()} VS {$opponentElement->getName()}";
    echo PHP_EOL;

    if ($winner === null) {
        echo "The game was tie!";
        echo PHP_EOL. PHP_EOL;
        continue;
    }
    echo "Winner: " .$winner->getName();
    echo PHP_EOL. PHP_EOL;
}


