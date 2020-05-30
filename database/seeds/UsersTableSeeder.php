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

            'role_id' => '1',
            'name' => 'Shamsuddha al amin',
            'email' => 'shamsuddha@gmail.com',
            'password' => bcrypt('1234567890a'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Asma Akter',
            'email' => 'asmarajit@gmail.com',
            'password' => bcrypt('1234567890a'),
        ]);
    }
}
