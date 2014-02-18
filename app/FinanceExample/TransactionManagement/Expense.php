<?php

class Expense implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {
        return "The account has $transaction->amount taken away from it";

    }
}