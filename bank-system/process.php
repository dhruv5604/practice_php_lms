<?php

spl_autoload_register(function($className){
    include $className . '.php';
});

$accA = new SavingAccount('1',500);
$accB = new CheckingAccount("2" , 1000);

$accA->deposit(500);
$accA->deposit(200);
$accA->withdraw(700);

$accB->deposit(1500);
$accB->deposit(300);
$accB->deposit(300);
$accB->withdraw(600);
$accB->withdraw(1600);

echo "Total Balance of " . $accA->getAccountNumber() . " is " .$accA->getTotalBalance() . "<br>";
echo "Total Balance of " . $accB->getAccountNumber() . " is " .$accB->getTotalBalance() . "<br>";

echo "Total Accounts: " . BankAccount::getTotalAccounts() . "<br>";
echo "Total Transactions: " . BankAccount::getTotalTransactions() . "<br>";
