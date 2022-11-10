<?php

/*
Create a class called Date that includes: three pieces of information as instance variables — a month, a day and a year.

Your class should have a constructor that initializes the three instance variables and assumes that the values provided
are correct. Provide a set and a get for each instance variable.

Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.

Write a test application named DateTest that demonstrates class Date capabilities.
*/

class Date {
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, $year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function setDay($newDay):int {
        return $this->day=$newDay;
    }

    public function setMonth($newMonth):int {
        return $this->day=$newMonth;
    }

    public function setYear($newYear):int {
        return $this->day=$newYear;
    }

    public function displayDate():string {
        return "$this->day/$this->month/$this->year";
    }
}

// vai testa aplikācija ir šis?

$DateTest = new Date(7,11,2022);
echo $DateTest->displayDate();


