<?php
/*
Foo Corporation needs a program to calculate how much to pay their hourly employees.
The US Department of Labor requires that employees get paid time and a half for any
hours over 40 that they work in a single week. For example, if an employee works 45 hours,
they get 5 hours of overtime, at 1.5 times their base pay. The State of Massachusetts
requires that hourly employees be paid at least $8.00 an hour. Foo Corp requires that an employee
not work more than 60 hours in a week.
*/

function wageCalculator(int $basePay, int $hoursWorked){
    $overtimeRate = $basePay*1.5;
    $overtimeHoursBarrier = 40;
    $maximumHoursAllowed = 60;

    if ($hoursWorked <= $overtimeHoursBarrier){
        $wage = $hoursWorked * $basePay;
        echo "Total wage: $wage. No overtime";
        echo PHP_EOL;
    }
    if ($hoursWorked >= $overtimeHoursBarrier && $hoursWorked <= $maximumHoursAllowed){
        $overtime = (($hoursWorked-$overtimeHoursBarrier) * $overtimeRate);
        $wage = ($basePay * $overtimeHoursBarrier) + $overtime;
        echo "Total wage: $wage. Overtime included $overtime";
        echo PHP_EOL;
    }
    if ($hoursWorked >= $maximumHoursAllowed){
        echo "Maximum $maximumHoursAllowed allowed hours worked. ";
        $overtime = (($maximumHoursAllowed-$overtimeHoursBarrier) * $overtimeRate);
        $wage = $basePay * $overtimeHoursBarrier + $overtime;
        echo "Total wage: $wage. Overtime included $overtime";
        echo PHP_EOL;
    }
}

$employees = [
    [
        "Name" => "Employee 1",
        "Base Pay" => 7.50,
        "Hours Worked" => 35
    ],
    [
        "Name" => "Employee 2",
        "Base Pay" => 8.20,
        "Hours Worked" => 47
    ],
    [
        "Name" => "Employee 3",
        "Base Pay" => 10.00,
        "Hours Worked" => 73
    ]
];

for ($i=0;$i<count($employees);$i++){
    echo $employees[$i]["Name"] . ": ";
    echo wageCalculator($employees[$i]["Base Pay"],$employees[$i]["Hours Worked"]);
}
