<?php

require("transaction_class.php");
require("user.php");
  
$transactions=[
    new Transaction("abc","200","withdrawal"),
    new Transaction("def","100","deposit"),
    new Transaction("abc","200","deposit"),
    new Transaction("def","50","withdrawal")
];

$users = [];

foreach ($transactions as $transaction) {
    if (!isset($users[$transaction->user])) {
        $users[$transaction->user] = new User(name: $transaction->user);
    }
    $users[$transaction->user]->add_transaction($transaction);
} 

foreach ($users as $user) {
    echo "<pre>";
    print_r($user->get_transactions());
}