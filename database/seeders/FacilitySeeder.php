<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create(['name' => 'Bedroom']);
        Facility::create(['name' => 'Kitchen']);
        Facility::create(['name' => 'Bathroom']);
        Facility::create(['name' => 'Room Amenities']);
        Facility::create(['name' => 'General']);
        Facility::create(['name' => 'Media & Technology']);
        Facility::create(['name' => 'Free Wifi']);
        Facility::create(['name' => 'Swim & SPA']);
        Facility::create(['name' => 'Movie Theaters']);
        Facility::create(['name' => 'Hair Dyer & Irons']);




    }
}
