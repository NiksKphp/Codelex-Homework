<?php

namespace App;

class SlotMachine
{
    private int $money;
    private int $earned = 0;
    private int $lost = 0;
    private array $symbols = ["❂", "☎", "✱", "☢", "♬"];
    private array $reels = [[' ', ' ', ' ', ' '],
        [' ', ' ', ' ', ' '],
        [' ', ' ', ' ', ' '],];

    public function __construct(int $money)
    {
        $this->money = $money + 10;
    }

    public function runSlotMachine()
    {
        $this->money = $this->money - 10;
        $this->lost = $this->lost + 10;

        // Generates random reel content
        for ($i = 0; $i < count($this->reels[0]); $i++) {
            $this->reels[0][$i] = $this->symbols[array_rand($this->symbols, 1)];
            $this->reels[1][$i] = $this->symbols[array_rand($this->symbols, 1)];
            $this->reels[2][$i] = $this->symbols[array_rand($this->symbols, 1)];
        }

        // Display's the slot machine
        echo PHP_EOL . " _-_ Slot Machine _-_" . PHP_EOL;
        echo "  | {$this->reels[0][0]} | {$this->reels[0][1]} | {$this->reels[0][2]} | {$this->reels[0][3]} |";
        echo PHP_EOL . "  -----------------" . PHP_EOL;
        echo "  | {$this->reels[1][0]} | {$this->reels[1][1]} | {$this->reels[1][2]} | {$this->reels[1][3]} |";
        echo PHP_EOL . "  -----------------" . PHP_EOL;
        echo "  | {$this->reels[2][0]} | {$this->reels[2][1]} | {$this->reels[2][2]} | {$this->reels[2][3]} |";
        echo PHP_EOL . "  _-_-_-_-_-_-_-_-_" . PHP_EOL;
        echo PHP_EOL;

        $this->winConditions();
        $this->displayMoney();
    }

    public function displayMoney()
    {
        echo "\033[33mMoney total: $this->money$ \033[0m" . PHP_EOL;
        echo "\033[32mEarned: $this->earned$ \033[0m";
        echo "\033[31mLost: $this->lost$ \033[0m" . PHP_EOL;
    }


    public function winConditions()
    {
        //todo pārrakstīt īsāk, ļoti slikts kods!

        //Victory if entire row has identical symbol
        if (count(array_unique($this->reels[0])) == 1) {
            $this->moneyWon = $this->winnings($this->reels[0][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! First row symbols are identical" . PHP_EOL;
        }
        if (count(array_unique($this->reels[1])) == 1) {
            $this->moneyWon = $this->winnings($this->reels[1][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Second row symbols are identical" . PHP_EOL;
        }
        if (count(array_unique($this->reels[2])) == 1) {
            $this->moneyWon = $this->winnings($this->reels[2][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Third row symbols are identical" . PHP_EOL;
        }

        //Victory if symbols are identical in a diagonal
        if (($this->reels[0][0] == $this->reels[1][1]) && ($this->reels[1][1] == $this->reels[1][2]) && ($this->reels[1][2] == $this->reels[2][3])) {
            $this->moneyWon = $this->winnings($this->reels[0][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Identical symbols form a diagonal" . PHP_EOL;
        }
        if (($this->reels[2][0] == $this->reels[1][1]) && ($this->reels[1][1] == $this->reels[1][2]) && ($this->reels[1][2] == $this->reels[0][3])) {
            $this->moneyWon = $this->winnings($this->reels[2][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Identical symbols form a diagonal" . PHP_EOL;
        }

        //Victory if symbols form zig-zag. -_-_
        if (($this->reels[0][0] == $this->reels[1][1]) && ($this->reels[1][1] == $this->reels[0][2]) && ($this->reels[0][2] == $this->reels[1][3])) {
            $this->moneyWon = $this->winnings($this->reels[0][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
        }
        if (($this->reels[1][0] == $this->reels[0][1]) && ($this->reels[0][1] == $this->reels[1][2]) && ($this->reels[1][2] == $this->reels[0][3])) {
            $this->moneyWon = $this->winnings($this->reels[1][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
        }
        if (($this->reels[1][0] == $this->reels[2][1]) && ($this->reels[2][1] == $this->reels[1][2]) && ($this->reels[1][2] == $this->reels[2][3])) {
            $this->moneyWon = $this->winnings($this->reels[1][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
        }
        if (($this->reels[2][0] == $this->reels[1][1]) && ($this->reels[1][1] == $this->reels[2][2]) && ($this->reels[2][2] == $this->reels[1][3])) {
            $this->money = $this->winnings($this->reels[2][0], $this->symbols);
            $this->money = $this->money + $this->moneyWon;
            $this->earned = $this->earned + $this->moneyWon;
            echo "You won $this->moneyWon$! Identical symbols form a zig-zag" . PHP_EOL;
        }
    }

    public function winnings($symbol)
    {
        if ($symbol == $this->symbols[0]) {
            return 50;
        }
        if ($symbol == $this->symbols[1]) {
            return 100;
        }
        if ($symbol == $this->symbols[2]) {
            return 150;
        }
        if ($symbol == $this->symbols[3]) {
            return 200;
        }
        if ($symbol == $this->symbols[4]) {
            return 250;
        }

        $this->money = $this->earned + $this->money;
    }
}
