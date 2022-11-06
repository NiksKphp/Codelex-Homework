<?php

class AsciiFigure {
    const integer = 4;

    public function asciiFigure() {
        for ($i = 0; $i < (self::integer/2); $i++) {
            echo PHP_EOL;
            for ($i = 0; $i < (self::integer/2); $i++){
                echo "*****";
            }
        }
    }
}

$ascii = new AsciiFigure();
$ascii->asciiFigure();
echo PHP_EOL . PHP_EOL;