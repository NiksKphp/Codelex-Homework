<?php

$accountA = New Account("Account A",100);
$accountB = New Account("Account B",0);
$accountC = New Account("Account C",0);

//Transfers 50.0 from account A to account B
//Transfers 25.0 from account B to account C

$transfer = New Transfer($accountA,$accountB,50);
$transfer->transfer($accountA,$accountB,200);
$transfer = New Transfer($accountB,$accountC,25);
$transfer->transfer($accountB,$accountC,25);
echo "Account C Balance is: " . $accountC->balance() . " (Expected: 25)";

class Transfer
{
    private Account $from;
    private Account $to;
    private int $howMuch;

    public function __construct(Account $from, Account $to, int $howMuch) {
        $this->from=$from;
        $this->to=$to;
        $this->howMuch=$howMuch;
    }

    function transfer(Account $from, Account $to, int $howMuch) {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }

}

class Account
{
    private string $accountName;
    private float $balance;

    public function __construct(string $accountName, float $balance){
        $this->accountName=$accountName;
        $this->balance=$balance;
    }

    public function deposit(float $sum){
        $this->balance = $this->balance + $sum;
    }

    public function withdrawal($sum){
        $this->balance = $this->balance - $sum;
    }

    public function balance():float {
        return $this->balance;
    }
}
