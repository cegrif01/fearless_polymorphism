<?php

class Transaction extends Eloquent
{
    const EXPENSE = 1;
    const INCOME = 2;

    protected $fillable = ['transaction_type_id', 'amount'];

    public function __construct(array $input)
    {
        //eloquent depends on an array containing the input
        parent::__construct($input);

    }

    /**
     * @var TransactionTypeInterface $transactionType;
     */
    protected $transactionType;

    public function processNewTransaction()
    {
        if($this->transaction_type_id == self::EXPENSE) {

            return "The account has $this->amount taken away from it";

        } elseif ($this->transaction_type_id == self::INCOME) {

            return "The account has $this->amount added to it";

        } else {

            throw new Exception('not valid transaction type');
        }
    }
}
