<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = Address::all();
        $users = User::all();

        for($i = 1; $i <= $users->count(); $i++) {
            $address = $addresses->first(function ($address) use ($i) {
                return $address->id == $i;
            });
            
            $user = $users->first(function ($user) use ($i) {
                return $user->id == $i;
            });

            Person::factory()->for($address)->for($user)->create();
        }
    }
}
