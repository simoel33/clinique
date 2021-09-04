<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,80) as $index)
        DB::table('users')->insert([
            'name'=> $index+100,
            'email'=>$index+18,
            'password'=>md5($index+19),
        ]);
    }
}
