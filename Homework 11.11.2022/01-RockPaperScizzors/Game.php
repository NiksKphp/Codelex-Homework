<?php

class Game
{
    private Element $attacker;
    private Element $defender;

    public function __construct(Element $attacker, Element $defender)
    {
        $this->attacker=$attacker;
        $this->defender=$defender;
    }

    public function getWinner(): ?Element
    {
        if ($this->attacker->getName() === $this->defender->getName())
        {
            return null;
        }

        if ($this->attacker->getBeats()->getName() === $this->defender->getName())
        {
            return $this->attacker;
        }

        return $this->defender;

    }

}





