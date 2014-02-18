<?php

class Transaction extends Eloquent
{
    protected $fillable = ['transaction_type_id', 'amount'];

    public function __construct(array $input, TransactionTypeInterface $transactionType)
    {
        //eloquent depends on an array containing the input
        parent::__construct($input);

        $this->transactionType = $transactionType;
    }

    /**
     * @var TransactionTypeInterface $transactionType;
     */
    protected $transactionType;

    public function processNewTransaction()
    {
        return $this->transactionType->processTransaction($this);
    }

}
