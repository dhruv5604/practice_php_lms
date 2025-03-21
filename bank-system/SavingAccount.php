<?php

class SavingAccount extends BankAccount{
    public function withdraw(float $amount){
        $this->balance -= $amount;
        parent::$totalTransactions++;

        parent::actionLog("withdraw", $amount, $this->accountNumber);
    }
}