<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Database\Factories\BlogCategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        BlogCategory::factory(10)->create();
    }
}
