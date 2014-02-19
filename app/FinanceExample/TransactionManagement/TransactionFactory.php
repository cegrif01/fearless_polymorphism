<?php

class AnotherTransactionFactory extends AbstractFactory
{
    const EXPENSE = 1;

    const INCOME = 2;

    const RECURRING = 3;

    public function make(array $input)
    {   
        if( ! array_key_exists('transaction_type_id', $input)) {

            throw new InvalidArgumentException;
        }

        $transactionType = $input['transaction_type_id'];

        switch($transactionType) {
            case self::EXPENSE:
                return new Transaction($input, new Expense(new Alert));
                break;

            case self::INCOME:
                return new Transaction($input, new Income(new Alert));
                break;

            case self::RECURRING:
                return new Transaction($input, new Recurring);
                break;

            default:
                throw new Exception('shouldn\'t be here');
        }

    }
}