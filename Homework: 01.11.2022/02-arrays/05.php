<?php

function display_board($gameBoard)
{
    echo " | {$gameBoard[0][0]} | {$gameBoard[0][1]} | {$gameBoard[0][2]}";
    echo PHP_EOL . " __________";
    echo PHP_EOL . " | {$gameBoard[1][0]} | {$gameBoard[1][1]} | {$gameBoard[1][2]}";
    echo PHP_EOL . " __________" . PHP_EOL;
    echo " | {$gameBoard[2][0]} | {$gameBoard[2][1]} | {$gameBoard[2][2]}";
    echo PHP_EOL;


    // Victory conditions;
    //Rows
    if ((($gameBoard[0][0] == "X") && ($gameBoard[0][1] == "X") && ($gameBoard[0][2] == "X")) || (($gameBoard[0][0] == "O") && ($gameBoard[0][1] == "O") && ($gameBoard[0][2] == "O"))) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($gameBoard[1][0] == "X") && ($gameBoard[1][1] == "X") && ($gameBoard[1][2] == "X") || ($gameBoard[1][0] == "O") && ($gameBoard[1][1] == "O") && ($gameBoard[1][2] == "O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($gameBoard[2][0] == "X") && ($gameBoard[2][1] == "X") && ($gameBoard[2][2] == "X") || ($gameBoard[2][0] == "O") && ($gameBoard[2][1] == "O") && ($gameBoard[2][2] == "O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    //Columns
    if (($gameBoard[0][0]=="X")&&($gameBoard[1][0]=="X")&&($gameBoard[2][0]=="X")||($gameBoard[0][0]=="O")&&($gameBoard[1][0]=="O")&&($gameBoard[2][0]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($gameBoard[0][1]=="X")&&($gameBoard[1][1]=="X")&&($gameBoard[2][1]=="X")||($gameBoard[0][1]=="O")&&($gameBoard[1][1]=="O")&&($gameBoard[2][1]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($gameBoard[0][2]=="X")&&($gameBoard[1][2]=="X")&&($gameBoard[2][2]=="X")||($gameBoard[0][2]=="O")&&($gameBoard[1][2]=="O")&&($gameBoard[2][2]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    // Diagonals
    if (($gameBoard[0][0] == "X") && ($gameBoard[1][1] == "X") && ($gameBoard[2][2] == "X") || ($gameBoard[0][0] == "O") && ($gameBoard[1][1] == "O") && ($gameBoard[2][2] == "O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($gameBoard[0][2] == "X") && ($gameBoard[1][1] == "X") && ($gameBoard[2][0] == "X") || ($gameBoard[0][2] == "O") && ($gameBoard[1][1] == "O") && ($gameBoard[2][0] == "O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
}
//Tie
if (in_array(" ",$gameBoard)){
    echo "Tie" . PHP_EOL;
    exit;
}

$gameEnd = false;

$gameBoard = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' '],
];

$isXturn = true;

while (true) {

    $choice = [];
    if ($isXturn == false){
        $choice[] = readline("'O', choose your location (row, column): ");
    } else {
        $choice[] = readline("'X', choose your location (row, column): ");
    }

    // ROW 1
    if($choice[0][0]==="1"){
        if($choice[0][2] == "1") {
            $gameBoard[0][0] = "X";
        }
        if ($choice[0][2] == "1" && !$isXturn) {
            $gameBoard[0][0]="O";
        }
        if($choice[0][2] == "2"){
            $gameBoard[0][1]="X";
        }
        if ($choice[0][2] == "2" && !$isXturn) {
            $gameBoard[0][1]="O";
        }
        if($choice[0][2] == "3"){
            $gameBoard[0][2]="X";
        }
        if ($choice[0][2] == "3" && !$isXturn) {
            $gameBoard[0][2]="O";
        }
    }
    // ROW 2
    if($choice[0][0]=="2"){
        if($choice[0][2] == "1") {
            $gameBoard[1][0] = "X";
        }
        if ($choice[0][2] == "1" && !$isXturn) {
            $gameBoard[1][0] ="O";
        }
        if($choice[0][2] == "2"){
            $gameBoard[1][1] ="X";
        }
        if ($choice[0][2] == "2" && !$isXturn) {
            $gameBoard[1][1] ="O";
        }
        if($choice[0][2] == "3"){
            $gameBoard[1][2] ="X";
        }
        if ($choice[0][2] == "3" && !$isXturn) {
            $gameBoard[1][2] ="O";
        }
    }

    // ROW 3
    if($choice[0][0]=="3"){
        if($choice[0][2] == "1") {
            $gameBoard[2][0] = "X";
        }
        if ($choice[0][2] == "1" && !$isXturn) {
            $gameBoard[2][0] ="O";
        }
        if($choice[0][2] == "2"){
            $gameBoard[2][1] ="X";
        }
        if ($choice[0][2] == "2" && !$isXturn) {
            $gameBoard[2][1] ="O";
        }
        if($choice[0][2] == "3"){
            $gameBoard[2][2] ="X";
        }
        if ($choice[0][2] == "3" && !$isXturn) {
            $gameBoard[2][2] ="O";
        }
    }

    display_board($gameBoard);

    // Whose turn
    if ($isXturn){
        $isXturn=false;
    } else {
        $isXturn=true;
    }
}

