<?php


class Account extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function transactions()
    {
        return $this->hasMany('Transaction');
    }

}