<?php

class Dog {
    private string $name;
    private string $maleOrFemale;

    public function __construct(string $name, string $maleOrFemale){
        $this->name = $name;
        $this->maleOrFemale = $maleOrFemale;
    }
}

class DogTest {

    public function Main(array $dogs) {
//        for ($i = 0; $i < count($dogs); $i++) {
//            ${"Dog$i"} = new Dog($dogs[$i][0],$dogs[$i][1]);
//        }
    }
}


$dogs = [
    ["Max", "male"],
    ["Rocky", "male"],
    ["Sparky", "male"],
    ["Buster", "male"],
    ["Sam", "male"],
    ["Lady", "female"],
    ["Molly", "female"],
    ["Coco", "female"]
];

$dogTest=new DogTest();
$dogTest->Main($dogs);




