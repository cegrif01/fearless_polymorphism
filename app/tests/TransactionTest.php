<?php

class TransactionTest extends TestCase
{

    /**
     * I instantiate a factory because I want to return the transaction with the correct
     * transaction_type dependency
     */
    public function test_process_expense_transaction()
    {
        $input = [ 'transaction_type_id' => 1, 'amount' => 200];

        $transaction = (new TransactionFactory)->make($input);
        
        $message = $transaction->processNewTransaction();

        $this->assertEquals('The account has 200 taken away from it', $message);
    }

    public function test_process_income_transaction()
    {
        $input = [ 'transaction_type_id' => 2, 'amount' => 200];

        $transaction = (new TransactionFactory)->make($input);
        
        $message = $transaction->processNewTransaction();

        $this->assertEquals('The account has 200 added to it', $message);
    }

    /**
     * @expectedException InvalidArgumentException
     * 
     */
    public function test_input_with_no_index_called_transaction_type_id_throws_exception()
    {
        $input = ['amount' => 200];

        $transaction = (new TransactionFactory)->make($input);
    }
}