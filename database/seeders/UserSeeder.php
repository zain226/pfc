<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'pkc',
                'email' => 'info@pakistankennelclub.com',
                'status' => 'active',
                'role' => 'admin',
                'password' => Hash::make('4eUCDrXEAS1HKG!1e#DCXIT3@@@')
            ],
            [
                'name' => 'gigasol',
                'email' => 'info@gigasol.com',
                'status' => 'active',
                'role' => 'super admin',
                'password' => Hash::make('gigasol0608')
            ],
        ]);
    }
}
