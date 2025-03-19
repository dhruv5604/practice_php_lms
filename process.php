<?php

require_once("transaction_class.php");
require_once("user.php");
  
$transactions=[
    new transaction_class("abc","300","withdrawal"),
    new transaction_class("def","100","deposit"),
    new transaction_class("abc","200","deposit"),
    new transaction_class("def","50","withdrawal")
];

$users = [];

foreach ($transactions as $transaction) {
    if (!isset($users[$transaction->user])) {
        $users[$transaction->user] = new User(name: $transaction->user);
    }
    $users[$transaction->user]->add_transaction($transaction);
} 

foreach ($users as $user) {
    echo "Details of " . $user->name . "\n";
    echo "<pre>";
    print_r($user->largest_transaction());

    print_r($user->total_deposte_withdrawals());
    print_r($user->total_balance());
}
