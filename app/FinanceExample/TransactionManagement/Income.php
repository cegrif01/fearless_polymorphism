<?php

class Income implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {

        return "The account has $transaction->amount added to it";

    }
}