<?php

use Illuminate\Database\Seeder;

class PrimaryInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = \App\Company::create([
            'company_name' => 'Demo Name',
            'company_email' => 'demo@email.com',
            'company_address' => 'Dhaka',
        ]);

        \App\User::create([
            'name' => 'Admin',
            'email' => 'email@email.com',
            'password' => bcrypt(12345678),
            'company_id' => $company->id
        ]);

    }
}
