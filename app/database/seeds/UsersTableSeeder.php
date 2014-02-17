<?php

use Carbon\Carbon;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->truncate();

        $users = [
            [
                'id'=>1,
                'user_type_id'=>1,
                'name' => 'Charles',
                'email'=>'cegrif01@gmail.com',
                //'email' => 'rangerchuck82086@gmail.com',
                'password'=>Hash::make('password'), 
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ],
            [
                'id'=>2,
                'user_type_id'=>1,
                'name' => 'Mandy', 
                'email'=>'zingbee01@gmail.com',
                'password'=>Hash::make('password'), 
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]
        ];

        // Uncomment the below to run the seeder
         DB::table('users')->insert($users);
    }

}
