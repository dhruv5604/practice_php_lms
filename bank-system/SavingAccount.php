<?php

class SavingAccount extends BankAccount{
    public function withdraw($amount){
        $this->balance -= $amount;
        parent::$totalTransactions++;

        parent::actionLog("withdraw", $amount, $this->accountNumber);
    }
}