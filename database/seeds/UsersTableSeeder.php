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
        \App\User::create([
            'company_id' => '1',
            'name' => 'dipok',
            'email' => 'dipokray@gmail.com',
            'password' => bcrypt('12345678')



        ]);

    }
}
