<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'yano',
            'email' => 'sample@sample.com',
            'password' => password_hash("testtest", PASSWORD_DEFAULT),
            'copo_id' => 101,
            'created_at' => now()
        ]);
    }
}
