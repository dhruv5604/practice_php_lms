<?php

// $servername = "localhost";
// $username = "root";
// $password = "root@user";
// $dbname = "demo";

// $connection = mysqli_connect($servername, $username, $password, $dbname);

$transactions = [
    ['id' => 1, 'user' => 'Alice', 'amount' => 100, 'type' => 'deposit'],
    ['id' => 2, 'user' => 'Bob', 'amount' => 50, 'type' => 'withdrawal'],
    ['id' => 3, 'user' => 'Alice', 'amount' => 200, 'type' => 'deposit'],
    ['id' => 4, 'user' => 'Bob', 'amount' => 30, 'type' => 'deposit'],
];

echo "<h2>group transactions by user</h2>";

$group = array();

foreach ( $transactions as $value ) {
    $group[$value['user']][] = $value;
}

echo "<pre>";
print_r($group);

echo "<h2>calculate balance by user</h2>";

$balances = array();

foreach ($transactions as $transaction) {
    $user = $transaction['user'];
    $amount = $transaction['amount'];

    if (!isset($balances[$user])) {
        $balances[$user] = 0;
    }

    if ($transaction['type'] === 'deposit') {
        $balances[$user] += $amount;
    } elseif ($transaction['type'] === 'withdrawal') {
        $balances[$user] -= $amount;
    }
}

echo '<pre>';
print_r($balances);

echo "<h2>Calculate Total Deposits and Withdrawals Per Use</h2>";

$result = array_reduce($transactions, "total_deposite_withdraws");

function total_deposite_withdraws($r1 , $r2){
    $user = $r2["user"];
    $amount = $r2["amount"];
    $type = $r2["type"];

    if(!isset($r1[$user])){
        $r1[$user] = ["deposit"=>0 , "withdrawal"=>0];
    }
    $r1[$user][$type] += $amount;

    return $r1;
}

print_r($result);

echo "<h2>Get a List of Unique User</h2>";

print_r(array_unique(array_column($transactions,"user")));

echo "<h2>Find the Largest Transaction for Each User</h2>";

$tempBalance = array();

foreach ( $transactions as $value ) {
    $tempBalance[$value['user']][] = $value['amount'];
}

$balance = array();

foreach($tempBalance as $value){
    // $balance[] = array_sum($value);
    $balance[0][key($tempBalance)] = array_sum($value);
    next($tempBalance);
}

$largest_transaction = array();
reset($tempBalance);
foreach ($tempBalance as $value) {
    $largest_transaction[0][key($tempBalance)] = array_reduce($value, "large_transaction");
    next($tempBalance);
}

function large_transaction($r1,$r2){
    if($r1>$r2){
        return $r1;
    }
    return $r2;
}

print_r($largest_transaction);