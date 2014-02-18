<?php

class TransactionFactory extends AbstractFactory
{
    const EXPENSE = 1;

    const INCOME = 2;

    public static function make(array $input)
    {   
        if( ! array_key_exists('transaction_type_id', $input) {

            throw new InvalidArgumentException;
        }

        $transactionType = $input['transaction_type_id'];

        switch($transactionType) {
            case self::EXPENSE:
                return new Transaction($input, new Expense);
                break;

            case self::INCOME:
                return new Transaction($input, new Income);
                break;

            default:
                throw new Exception('shouldn\'t be here');
        }

    }
}