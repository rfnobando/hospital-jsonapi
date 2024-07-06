<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocalitySeeder::class,
            AddressSeeder::class,
            UserSeeder::class,
            PersonSeeder::class,
            PatientSeeder::class,
            DoctorSeeder::class
        ]);
    }
}
