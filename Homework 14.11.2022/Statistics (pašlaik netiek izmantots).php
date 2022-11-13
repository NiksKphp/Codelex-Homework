<?php

$causes = [
  [
      "Sirds" => 0,
  ],
  [
      "Assinsvadi" => 0,
  ],
  [
      "UTT" => 0,
  ],
];

class CausesCalculation {
    private array $causes;

    public function __construct(array $causes = []){
        $this->causes=$causes;
    }

    public function addCause(Cause $cause):void
    {
        $this->causes [] = $cause;
    }

}

class Causes {
    private string $title;
    private int $numberOfCases;

    public function __construct(string $title, int $numberOfCases){
        $this->title=$title;
        $this->numberOfCases=$numberOfCases;
    }
}