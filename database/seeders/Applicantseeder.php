<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Applicantseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Applicant::factory(20)->create();
    }
}
