<?php

class Transaction

    public function __construct(TransactionTypeInterface $transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @var TransactionTypeInterface $transactionType;
     */
    protected $transactionType;

    public function processNewTransaction()
    {
        $this->transactionType->processTransaction($this);
    }

}
