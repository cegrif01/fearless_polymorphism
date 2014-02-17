<?php

use Carbon\Carbon;

class AccountsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('accounts')->truncate();

        $accounts = [
            [
                'id'              => 1, 
                'user_id'         => 1,
                'account_type_id' => 1,
                'name'            => 'Us Bank',
                'current_balance' => '800.32',
                'opening_balance' => '1500.00', 
                'created_at'      => Carbon::now()->toDateTimeString(),
                'updated_at'      => Carbon::now()->toDateTimeString(),
            ],

            [
                'id'              => 2,
                'user_id'         => 2,
                'account_type_id' => 2,
                'name'            => 'PNC Bank', 
                'current_balance' => '100.00',
                'opening_balance' => '1500.00', 
                'created_at'      =>Carbon::now()->toDateTimeString(),
                'updated_at'      =>Carbon::now()->toDateTimeString(),
            ],
        ];

        // Uncomment the below to run the seeder
        DB::table('accounts')->insert($accounts);
    }

}
