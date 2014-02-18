<?php

interface TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction);

}

class Income implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {
        return "The account has $transaction->amount added to it";
    }
}

class Expense implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {
        return "The account has $transaction->amount taken away from it";
    }
}