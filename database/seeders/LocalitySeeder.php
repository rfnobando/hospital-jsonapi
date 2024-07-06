<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Doctor;
use App\Models\Locality;
use App\Models\Patient;
use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Locality::factory()
            ->count(3)
            ->create();
    }
}
