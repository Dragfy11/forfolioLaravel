<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserList1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_list1s')->insert(
            [
                [
                    'name'=>'Dragfy',
                    'website'=>"www.example.com",
                    'phone'=>'+123 456 7890',
                    'city'=>'Brussels, Belgium'
                ]
            ]
        );
    }
}
