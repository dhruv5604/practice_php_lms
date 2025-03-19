<?php
//user

use Basics\transaction;

require_once("transaction_class.php");
class user
{
    // public function __construct()
    // {
    //     $this->user = new User();
    // }
    public $name;
    public $transactions = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add_transaction($transactions)
    {
        $this->transactions[] = $transactions;
    }
    public function get_transactions()
    {
        return $this->transactions;
    }

    public function largest_transaction() {
        if (empty($this->transactions)) {
            return null;
        }
    
        $largest_transaction = array_reduce($this->transactions, function ($carry, $transaction) {
            return ($carry === null || $transaction->amount > $carry->amount) ? $transaction : $carry;
        });
    
        return [
            
            'LargestAmount' => $largest_transaction->amount,
            'Type' => $largest_transaction->type
        ];
    }
    

    public function total_deposte_withdrawals() {
        $totalDeposits = 0;
        $totalWithdrawals = 0;

        foreach ($this->transactions as $transaction) {
            if ($transaction->type === 'deposit') {
                $totalDeposits += $transaction->amount;
            } elseif ($transaction->type === 'withdrawal') {
                $totalWithdrawals += $transaction->amount;
            }
        }

        return [
            'totalDeposits' => $totalDeposits,
            'totalWithdrawals' => $totalWithdrawals
        ];
    }

    public function total_balance(){
        $totalBalance = 0;

        foreach ($this->transactions as $transaction) {
            if ($transaction->type === "deposit") {
                $totalBalance += $transaction->amount;
            } else {
                $totalBalance -= $transaction->amount;
            }
        }

        return ["Balance" => $totalBalance];
    }

}
