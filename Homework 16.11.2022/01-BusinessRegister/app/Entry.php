<?php

namespace App;

class Entry
{
    private string $searchInput;
    private $csv;
    private $getDate;
    private $getId;
    private $getName;
    private $getAdress;

    public function __construct(string $searchInput, $csv)
    {
        $this->searchInput = $searchInput;
        $this->csv = $csv;
        $this->getId = $this->getId();
        $this->getName = $this->getName();
        $this->getDate = $this->getDate();
        $this->getAdress = $this->getAdress();
    }

    private function getId(): string
    {
        foreach ($this->csv as $entry) {
            if (($entry[0] === $this->searchInput) || ($entry[2] === $this->searchInput)) {
                return $entry[0];
            }
        }
    }

    private function getName(): string
    {
        foreach ($this->csv as $entry) {
            if (($entry[0] === $this->searchInput) || ($entry[2] === $this->searchInput)) {
                return $entry[2];
            }
        }
    }

    private function getDate(): string
    {
        foreach ($this->csv as $entry) {
            if (($entry[0] === $this->searchInput) || ($entry[2] === $this->searchInput)) {
                return $entry[11];
            }
        }
    }

    private function getAdress(): string
    {
        foreach ($this->csv as $entry) {
            if (($entry[0] === $this->searchInput) || ($entry[2] === $this->searchInput)) {
                if (!($entry[14]) == null) {
                    return $entry[14];
                } else {
                    return "No address";
                }
            }
        }
    }

    public function getEntry(): string
    {
        return "Reģistrācijas kods: $this->getId\nNosaukums: $this->getName .\nReģistrēšanas datums: $this->getDate \nAdrese: $this->getAdress \n\n";
    }
}