<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Locality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $localities = Locality::all();

        foreach($localities as $locality) {
            Address::factory()->count(2)->for($locality)->create();
        }
    }
}
