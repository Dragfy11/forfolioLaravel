<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserList2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_list2s')->insert(
            [
                [
                    'age'=> 24,
                    'degree'=>"Master",
                    'mail'=>'email@example.com',
                    'freelance'=>'Available'
                ]
            ]
        );
    }
}
