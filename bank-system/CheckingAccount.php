<?php

class CheckingAccount extends BankAccount{
    public function withdraw(float $amount){
        if($amount > 1000){
            echo "Withdrawal amount is greater than limit!!!<br>";
        } else {
            $this->balance -= $amount;
            parent::$totalTransactions++;
            parent::actionLog("withdraw", $amount, $this->accountNumber);
        }
    }
}