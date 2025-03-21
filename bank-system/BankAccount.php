<?php

include 'Logger.php';

abstract class BankAccount{

    use logger;
    protected $accountNumber;
    protected $balance;

    public static $totalTransactions = 0;
    public static $totalAccount = 0;

    public function __construct($accountNumber , float $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        self::$totalAccount++;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }

    public function deposit(float $amount){
        $this->balance += $amount;
        self::$totalTransactions++;

        $this->actionLog("deposit", $amount, $this->accountNumber);
    }

    public function getTotalBalance(){
        return $this->balance;
    }

    static public function getTotalAccounts(){
        return self::$totalAccount;
    }

    static public function getTotalTransactions(){
        return self::$totalTransactions;
    }

    abstract public function withdraw(float $amount);
}