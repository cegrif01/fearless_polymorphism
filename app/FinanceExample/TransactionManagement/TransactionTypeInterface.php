<?php

interface TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction);

}