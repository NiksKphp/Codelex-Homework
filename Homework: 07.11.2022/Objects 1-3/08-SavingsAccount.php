<?php

class SavingsAccount {
    private int $balance;
    private int $annualRate;

    public function __construct(float $balance, int $annualRate){
        $this->balance = $balance;
        $this->annualRate = $annualRate;
    }

    public function withdraw(float $withdrawAmount) {
        $this->balance = $this->balance - $withdrawAmount;
    }
    public function deposit(float $depositAmount) {
        $this->balance = $this->balance + $depositAmount;
    }
    public function addInterest() {
        $monthlyRate = $this->annualRate/12;
        $interestEarned = $this->balance * $monthlyRate;
        $this->balance = $this->balance + $interestEarned;
    }
    public function getInterest():float {
        $monthlyRate = $this->annualRate / 12;
        return $this->balance * $monthlyRate;
    }
    public function getBalance():float {
        return $this->balance;
    }
}

$totalDeposited = 0;
$totalWithdrawn = 0;
$totalInterest = 0;

$balance = readline("How much money is in the account?: ");
$annualRate = readline("Enter the annual interest rate: ");
$months = readline("How long has the account been opened?: ");

$bankAccount = new SavingsAccount($balance,$annualRate);

for ($i = 1; $i <= $months; $i++) {
    $monthlyDeposit = readline("Enter amount deposited for month: $i: ");
    $monthlyWithdraw = readline("Enter amount withdrawn for $i: ");
    $totalDeposited = $totalDeposited + $monthlyDeposit;
    $totalWithdrawn = $totalWithdrawn + $monthlyWithdraw;
    $totalInterest = $totalInterest + $bankAccount->getInterest();
    $bankAccount->deposit($monthlyDeposit);
    $bankAccount->withdraw($monthlyWithdraw);
    $bankAccount->addInterest();
}

//todo format currency

echo "Total deposited: $totalDeposited" . PHP_EOL;
echo "Total withdrawn: $totalWithdrawn" . PHP_EOL;
echo "Interest earned: " . $totalInterest . PHP_EOL;
echo "Ending Balance: " . $bankAccount->getBalance() . PHP_EOL;