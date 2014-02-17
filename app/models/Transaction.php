<?php

class Transaction extends Eloquent 
{
    /**
     * @var TransactionTypeInterface $transactionType;
     */
    protected $transactionType;

    protected $fillable=['amount','transaction_type_id','account_id','description','purchase_date'];

    //protected $guarded = ['id', 'account_id'];

    public function account()
    {
        return $this->belongsTo('Account');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transactions';

    public function processNewTransaction(array $input)
    {
        $instance = new static;

        $instance->fill($input);

        $this->transactionType->processTransaction($instance);
    }

}
