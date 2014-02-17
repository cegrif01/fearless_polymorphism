<?php

class Expense implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {
        exit("The account has $transaction->amount taken away from it");

    }
}