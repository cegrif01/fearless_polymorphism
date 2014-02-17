<?php

class Income implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {

        exit("The account has $transaction->amount added to it");

    }
}