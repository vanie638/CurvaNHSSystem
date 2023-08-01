<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Form;

class FormsTableSeeder extends Seeder
{
    public function run()
    {
        // Adjust the number of records you want to seed (e.g., 50)
        Form::factory()->count(50)->create();
    }
}