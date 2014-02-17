<?php

use Carbon\Carbon;

class TransactionsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('transactions')->truncate();

        $transactions = [
            [
                
                'user_id' => 1,
                'transaction_type_id' => 1,
                'account_id'    => 1,
                'amount'    => 98.00,
                'description' => 'went shopping',
                'check_number' => null,
                'payee' => null,
                'purchase_date' => Carbon::now()->toDateString(),
                'created_at'    => Carbon::now()->toDateTimeString(),
                'updated_at'    => Carbon::now()->toDateTimeString(),
            ],

            [
                
                'user_id' => 1,
                'transaction_type_id' => 2,
                'account_id'    => 1,
                'amount'    => 18.55,
                'description' => 'reimbursed for shirt',
                'check_number' => null,
                'payee' => null,
                'purchase_date' => Carbon::now()->toDateString(),
                'created_at'    => Carbon::now()->toDateTimeString(),
                'updated_at'    => Carbon::now()->toDateTimeString(),
            ],

            [
                
                'user_id' => 2,
                'transaction_type_id' => 1,
                'account_id'    => 1,
                'amount'    => 63.24,
                'description' => 'rock climbing',
                'check_number' => null,
                'payee' => null,
                'purchase_date' => Carbon::now()->toDateString(),
                'created_at'    => Carbon::now()->toDateTimeString(),
                'updated_at'    => Carbon::now()->toDateTimeString(),
            ],
        ];

        // Uncomment the below to run the seeder
        DB::table('transactions')->insert($transactions);
    }

}
