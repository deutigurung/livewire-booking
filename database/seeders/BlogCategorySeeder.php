<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::create(['name'=>'News','slug'=>'news']);
        BlogCategory::create(['name'=>'Hotel','slug'=>'hotel']);
        BlogCategory::create(['name'=>'Vacation','slug'=>'vacation']);

    }
}
