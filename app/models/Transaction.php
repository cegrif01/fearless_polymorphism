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

    public function performComplicatedMethodWithIfElse()
    {
        //oh and deductAmount has some conditionals too!
        $this->account->deductAmount();

        if($this->account->amount < 0) {
            //a bunch of if-else's in sendAlert
            //to figure out the type of alert
            $this->account->sendAlert();
        }
    }

    public function performOtherComplicatedMethodWithIfElse()
    {
        
        if($this->amount > 1000 && $this->withInTodaysRange()) {
            //oh and addAmount has some conditionals too!
            $this->account->addAmount(); 
            return;   
        }

        return 'please contact your bank cuz you spending too much money';
    }

    public function processNewTransaction()
    {
        if($this->transaction_type_id == self::EXPENSE) {

            $this->performComplicatedMethodWithIfElse();

        } elseif ($this->transaction_type_id == self::INCOME) {

            $this->performOtherComplicatedMethodWithIfElse();

        } else {

            throw new Exception('not valid transaction type');
        }
    }
}
