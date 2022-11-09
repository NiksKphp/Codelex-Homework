<?php

class Element
{
    private string $name;
    private Element $beats;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getBeats(): Element
    {
        return $this->beats;
    }

    public function setBeats(Element $element):void
    {
        $this->beats = $element;
    }

}