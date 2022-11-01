<?php

/*
On your phone keypad, the alphabets are mapped to digits as follows:
 ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).

Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
 and converts to a sequence of keypad digits.

Use:
    a "nested-if" statement
    a "switch-case-default" statement

Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
 */

function PhoneKeyPad($input){

    $input = strtoupper($input);

    for ($i=0;$i<strlen($input);$i++){
        switch ($input[$i]) {
            //ABC
                case "A":
                    echo 2 . " ";
                    break;
                case "B":
                    echo 22 . " ";
                    break;
                case "C":
                    echo 222 . " ";
                    break;
            //DEF
                case "D":
                    echo 3 . " ";
                    break;
                case "E":
                    echo 33 . " ";
                    break;
                case "F":
                    echo 333 . " ";
                    break;
            //GHI
                case "G":
                    echo 4 . " ";
                    break;
                case "H":
                    echo 44 . " ";
                    break;
                case "I":
                    echo 444 . " ";
                    break;
            //JKL
                case "J":
                    echo 5 . " ";
                    break;
                case "K":
                    echo 55 . " ";
                    break;
                case "L":
                    echo 555 . " ";
                    break;
            //MNO
                case "M":
                    echo 6 . " ";
                    break;
                case "N":
                    echo 66 . " ";
                    break;
                case "O":
                    echo 666 . " ";
                    break;
            //PQRS
                case "P":
                    echo 7 . " ";
                    break;
                case "Q":
                    echo 77 . " ";
                    break;
                case "R":
                    echo 777 . " ";
                    break;
                case "S":
                    echo 7777 . " ";
                    break;
            //TUV
                case "T":
                    echo 8 . " ";
                    break;
                case "U":
                    echo 88 . " ";
                    break;
                case "V":
                    echo 888 . " ";
                    break;
            //WXYZ
                case "W":
                    echo 9 . " ";
                    break;
                case "X":
                    echo 99 . " ";
                    break;
                case "Y":
                    echo 999 . " ";
                    break;
                case "Z":
                    echo 9999 . " ";
                    break;
            //Not a valid input
                default:
                echo "Not a valid input";
        }

    }
    echo PHP_EOL;
}

$input = readline("Enter string: ");
PhoneKeyPad($input);