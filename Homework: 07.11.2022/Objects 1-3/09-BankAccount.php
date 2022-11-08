<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance){
        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance():string {
        $balanceWithDecimals = number_format($this->balance, 2);
        if ($this->balance<0){
            $negativeBalance = abs($balanceWithDecimals);
            $negativeBalance = number_format($negativeBalance, 2);
            return "$this->name, -$$negativeBalance";
        }
        return "$this->name, $$balanceWithDecimals";
    }
}

$ben = new BankAccount("Benson", 15.50);
echo $ben->show_user_name_and_balance();