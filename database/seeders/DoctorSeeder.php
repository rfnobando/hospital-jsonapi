<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = Person::all();

        foreach($persons as $person) {
            if($person->id % 3 == 0) {
                Doctor::factory()->for($person)->create();
            }
        }
    }
}
