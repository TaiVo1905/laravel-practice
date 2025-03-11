<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Categories::factory()->count(100)->create();
    }
}
