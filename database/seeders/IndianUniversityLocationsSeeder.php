<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class IndianUniversityLocationsSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            'Maharashtra' => [
                'Mumbai',
                'Pune',
            ],

            'Tamil Nadu' => [
                'Vellore',
            ],

            'Uttar Pradesh' => [
                'Noida',
                'Greater Noida',
                'Mathura',
            ],

            'Karnataka' => [
                'Manipal',
                'Bengaluru',
            ],

            'Sikkim' => [
                'Gangtok',
            ],

            'Rajasthan' => [
                'Jaipur',
            ],

            'California' => [
                'Port Luisaland',
            ],
        ];

        foreach ($locations as $stateName => $cities) {

            $state = State::firstOrCreate([
                'name' => $stateName,
            ]);

            foreach ($cities as $cityName) {

                City::firstOrCreate([
                    'state_id' => $state->id,
                    'name' => $cityName,
                ]);
            }
        }
    }
}