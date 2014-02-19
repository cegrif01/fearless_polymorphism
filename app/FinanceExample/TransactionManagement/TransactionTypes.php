<?php

interface TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction);

}

class Income implements TransactionTypeInterface
{
    public function __construct(Alert $alert) {
        $this->alert = $alert;
    }

    
    public function processTransaction(Transaction $transaction)
    {
        $account = $transaction->account->subtractAmount($transaction->amount);

        //the alert can use polymorphism too
        return $this->alert->sendAlert('success');
    }
}

class Expense implements TransactionTypeInterface
{
    public function __construct(Alert $alert) {
        $this->alert = $alert;
    }

    public function processTransaction(Transaction $transaction)
    {
        
        $account = $transaction->account->subtractAmount($transaction->amount);

        if($transaction->account->current_balance < 0) {
            //the alert can use polymorphism too
            return $this->alert->sendAlert('negative_balance');    
        }
    }
}

class Recurring implements TransactionTypeInterface
{
    public function processTransaction(Transaction $transaction)
    {
        return "No deductions quite yet, it's gonna take 3 weeks.";
    }
}