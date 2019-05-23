<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\section::create([
            'company_id' => '1',
            'created_by' =>'dipok',
            'updated_by' => 'dipok',
            'section_name' =>'worker'


        ]);
    }
}
