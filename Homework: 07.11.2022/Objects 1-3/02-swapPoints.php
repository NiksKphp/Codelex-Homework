<?php

//todo vēl piestrādāt, rezultāts nesakrīt 100% pēc noteikumiem

class Point
{
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function swap():string
    {
        $Swap1 = $this->y;
        $Swap2 = $this->x;
        return "($Swap2,"."$Swap1)";
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1 = $p1->swap();
$p2 = $p2->swap();

echo $p2.PHP_EOL;
echo $p1.PHP_EOL;

