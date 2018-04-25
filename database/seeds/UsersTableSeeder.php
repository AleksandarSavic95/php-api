<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'fip',
            'email' => 'fip@fip.com',
            'password' => bcrypt('fipfip'),
        ]);
        DB::table('users')->insert([
            'name' => 'mitar',
            'email' => 'mitar@miric.com',
            'password' => bcrypt('mitarmiric'),
        ]);
    }
}