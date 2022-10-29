<?php

function display_board($row1,$row2,$row3){
    $separator = "---+---+---";
    echo $row1 . PHP_EOL;
    echo $separator . PHP_EOL;
    echo $row2 . PHP_EOL;
    echo $separator . PHP_EOL;
    echo $row3 . PHP_EOL;

    // Victory conditions;
    //Rows
    if (($row1[1]=="X")&&($row1[5]=="X")&&($row1[9]=="X")||($row1[1]=="O")&&($row1[5]=="O")&&($row1[9]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($row2[1]=="X")&&($row2[5]=="X")&&($row2[9]=="X")||($row2[1]=="O")&&($row2[5]=="O")&&($row2[9]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($row3[1]=="X")&&($row3[5]=="X")&&($row3[9]=="X")||($row3[1]=="O")&&($row3[5]=="O")&&($row3[9]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    //Columns
    if (($row1[1]=="X")&&($row2[1]=="X")&&($row3[1]=="X")||($row1[1]=="O")&&($row2[1]=="O")&&($row3[1]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($row1[5]=="X")&&($row2[5]=="X")&&($row3[5]=="X")||($row1[5]=="O")&&($row2[5]=="O")&&($row3[5]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($row1[9]=="X")&&($row2[9]=="X")&&($row3[9]=="X")||($row1[9]=="O")&&($row2[9]=="O")&&($row3[9]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    // Diagonals
    if (($row1[1]=="X")&&($row2[5]=="X")&&($row3[9]=="X")||($row1[1]=="O")&&($row2[5]=="O")&&($row3[9]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
    if (($row1[9]=="X")&&($row2[5]=="X")&&($row3[1]=="X")||($row1[9]=="O")&&($row2[5]=="O")&&($row3[1]=="O")) {
        echo "Victory for player with last turn" . PHP_EOL;
        exit;
    }
}

$gameEnd = false;
$row1 = "   |   |   ";
$row2 = "   |   |   ";
$row3 = "   |   |   ";

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
            $row1[1] = "X";
        }
        if ($choice[0][2] == "1" && !$isXturn) {
            $row1[1]="O";
        }
        if($choice[0][2] == "2"){
            $row1[5]="X";
        }
        if ($choice[0][2] == "2" && !$isXturn) {
            $row1[5]="O";
        }
        if($choice[0][2] == "3"){
            $row1[9]="X";
        }
        if ($choice[0][2] == "3" && !$isXturn) {
            $row1[9]="O";
        }
    }
    // ROW 2
    if($choice[0][0]=="2"){
        if($choice[0][2] == "1") {
            $row2[1] = "X";
        }
        if ($choice[0][2] == "1" && !$isXturn) {
            $row2[1]="O";
        }
        if($choice[0][2] == "2"){
            $row2[5]="X";
        }
        if ($choice[0][2] == "2" && !$isXturn) {
            $row2[5]="O";
        }
        if($choice[0][2] == "3"){
            $row2[9]="X";
        }
        if ($choice[0][2] == "3" && !$isXturn) {
            $row2[9]="O";
        }
    }

    // ROW 3
    if($choice[0][0]=="3"){
        if($choice[0][2] == "1") {
            $row3[1] = "X";
        }
        if ($choice[0][2] == "1" && !$isXturn) {
            $row3[1]="O";
        }
        if($choice[0][2] == "2"){
            $row3[5]="X";
        }
        if ($choice[0][2] == "2" && !$isXturn) {
            $row3[5]="O";
        }
        if($choice[0][2] == "3"){
            $row3[9]="X";
        }
        if ($choice[0][2] == "3" && !$isXturn) {
            $row3[9]="O";
        }
    }

    display_board($row1,$row2,$row3);

    // Whose turn
    if ($isXturn){
        $isXturn=false;
    } else {
        $isXturn=true;
    }
}

