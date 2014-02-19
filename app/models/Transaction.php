<?php

class Transaction extends Eloquent
{
    const EXPENSE = 1;
    const INCOME = 2;
    const RECURRING = 3;

    protected $fillable = ['transaction_type_id', 'amount'];

    public function __construct(array $input)
    {
        //eloquent depends on an array containing the input
        parent::__construct($input);

    }

    public function processNewTransaction()
    {
        $alert = new Alert;

        if($this->transaction_type_id == self::EXPENSE) {

            $this->account->substractAmount($this->amount);

            if($this->account->amount < 0) {
                
                return $alert->sendAlert('negative_balance');
            }

            return $alert->sendAlert('success');

        } elseif ($this->transaction_type_id == self::INCOME) {

            $this->account->addAmount($this->amount);
                
            return $alert->sendAlert('success');

        } elseif ($this->transaction_type_id == self::RECURRING) {

            return "No Deductions Quite yet, it will take three weeks";

        } else {

            throw new Exception('not valid transaction type');
        }
    }
}
