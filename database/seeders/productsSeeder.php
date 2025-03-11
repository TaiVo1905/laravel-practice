<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Products::Factory()->count(100)->create();

    }
}
