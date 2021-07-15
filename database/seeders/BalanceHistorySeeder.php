<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BalanceHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balance_history')->insert([
            'user_id' => rand(0, 10000),
            'value' => rand(0, 10000),
            'balance' => rand(0, 10000),
            'created_at' => date("Y-m-d H:i:s") ,
        ]);
    }
}
