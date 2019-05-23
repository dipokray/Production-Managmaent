<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Company::create([
            'company_name' => 'Smartsoft',
            'company_email' => 'smartsoft@gmail.com',
            'company_address' => 'panthapath'
        ]);
    }
}
