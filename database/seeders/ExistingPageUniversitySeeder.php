<?php

namespace Database\Seeders;

use App\Models\University;
use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class ExistingPageUniversitySeeder extends Seeder
{
    public function run(): void
    {
       

        $locations = [
            'maharashtra' => [
                'state' => 'Maharashtra',
                'cities' => [
                    'mumbai' => 'Mumbai',
                    'pune' => 'Pune',
                ],
            ],

            'tamil_nadu' => [
                'state' => 'Tamil Nadu',
                'cities' => [
                    'vellore' => 'Vellore',
                ],
            ],

            'uttar_pradesh' => [
                'state' => 'Uttar Pradesh',
                'cities' => [
                    'noida' => 'Noida',
                    'greater_noida' => 'Greater Noida',
                    'mathura' => 'Mathura',
                ],
            ],

            'karnataka' => [
                'state' => 'Karnataka',
                'cities' => [
                    'manipal' => 'Manipal',
                    'bengaluru' => 'Bengaluru',
                ],
            ],

            'sikkim' => [
                'state' => 'Sikkim',
                'cities' => [
                    'gangtok' => 'Gangtok',
                ],
            ],

            'rajasthan' => [
                'state' => 'Rajasthan',
                'cities' => [
                    'jaipur' => 'Jaipur',
                ],
            ],

            'california' => [
                'state' => 'California',
                'cities' => [
                    'california_city' => 'Port Luisaland',
                ],
            ],
        ];

        $state = [];
        $city = [];

        foreach ($locations as $stateKey => $location) {

            $state[$stateKey] = State::where(
                'name',
                $location['state']
            )->first();

            if (! $state[$stateKey]) {
                throw new \Exception(
                    "State '{$location['state']}' not found in states table."
                );
            }

            foreach ($location['cities'] as $cityKey => $cityName) {

                $city[$cityKey] = City::where(
                    'state_id',
                    $state[$stateKey]->id
                )
                    ->where('name', $cityName)
                    ->first();

                if (! $city[$cityKey]) {
                    throw new \Exception(
                        "City '{$cityName}' not found for state '{$location['state']}'."
                    );
                }
            }
        }

 $universities = [

            [
                'name' => 'NMIMS CDOE',
                'slug' => 'nmims-cdoe',
                'state_id' => $state['maharashtra']->id,
                'city_id' => $city['mumbai']->id,
                'university_type' => 'Deemed University',
                'ownership' => 'Private',
                'accreditation' => 'NMIMS',
                'ranking' => 21,
                'average_package' => 800000,
                'highest_package' => 1500000,
                'placement_percentage' => 85,
                'logo' => public_path('img/brand/university-01.png'),
            ],

            [
                'name' => 'Vellore Institute Of Technology',
                'slug' => 'vit',
                'state_id' => $state['tamil_nadu']->id,
                'city_id' => $city['vellore']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 11,
                'average_package' => 750000,
                'highest_package' => 2000000,
                'placement_percentage' => 90,
            ],

            [
                'name' => 'Amity University Online',
                'slug' => 'amity-university-online',
                'state_id' => $state['uttar_pradesh']->id,
                'city_id' => $city['noida']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 32,
                'average_package' => 600000,
                'highest_package' => 1200000,
                'placement_percentage' => 80,
            ],

            [
                'name' => 'Manipal Online',
                'slug' => 'manipal-online',
                'state_id' => $state['karnataka']->id,
                'city_id' => $city['manipal']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 14,
                'average_package' => 650000,
                'highest_package' => 1400000,
                'placement_percentage' => 85,
            ],

            [
                'name' => 'Sikkim Manipal University',
                'slug' => 'sikkim-manipal-university',
                'state_id' => $state['sikkim']->id,
                'city_id' => $city['gangtok']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 45,
                'average_package' => 500000,
                'highest_package' => 1000000,
                'placement_percentage' => 75,
            ],

            [
                'name' => 'DY Patil Pune',
                'slug' => 'dy-patil-pune',
                'state_id' => $state['maharashtra']->id,
                'city_id' => $city['pune']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 55,
                'average_package' => 550000,
                'highest_package' => 1100000,
                'placement_percentage' => 78,
            ],

            [
                'name' => 'Jain Online',
                'slug' => 'jain-online',
                'state_id' => $state['karnataka']->id,
                'city_id' => $city['bengaluru']->id,
                'university_type' => 'Deemed University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 35,
                'average_package' => 600000,
                'highest_package' => 1200000,
                'placement_percentage' => 80,
            ],

            [
                'name' => 'N.L Dalmia Online',
                'slug' => 'nl-dalmia-online',
                'state_id' => $state['maharashtra']->id,
                'city_id' => $city['mumbai']->id,
                'university_type' => 'Other',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 60,
                'average_package' => 550000,
                'highest_package' => 1000000,
                'placement_percentage' => 75,
            ],

            [
                'name' => 'Vivekananda Global University (VGU) Online',
                'slug' => 'vivekananda-global-university-online',
                'state_id' => $state['rajasthan']->id,
                'city_id' => $city['jaipur']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 65,
                'average_package' => 450000,
                'highest_package' => 900000,
                'placement_percentage' => 75,
            ],

            [
                'name' => 'GLA University Online',
                'slug' => 'gla-university-online',
                'state_id' => $state['uttar_pradesh']->id,
                'city_id' => $city['mathura']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 41,
                'average_package' => 500000,
                'highest_package' => 1000000,
                'placement_percentage' => 80,
            ],

            [
                'name' => 'University of Massachusetts Global Online',
                'slug' => 'university-of-massachusetts-global-online',
                'state_id' => $state['california']->id,
                'city_id' => $city['california_city']->id,
                'university_type' => 'Other',
                'ownership' => 'Private',
                'accreditation' => 'WSCUC',
                'ranking' => 50,
                'average_package' => 700000,
                'highest_package' => 1400000,
                'placement_percentage' => 85,
            ],

            [
                'name' => 'Bennett University',
                'slug' => 'bennett-university',
                'state_id' => $state['uttar_pradesh']->id,
                'city_id' => $city['greater_noida']->id,
                'university_type' => 'Private University',
                'ownership' => 'Private',
                'accreditation' => 'NAAC',
                'ranking' => 25,
                'average_package' => 800000,
                'highest_package' => 1800000,
                'placement_percentage' => 85,
            ],

        ];


      
        foreach ($universities as $university) {
    University::updateOrCreate(
        ['slug' => $university['slug']],
        [
            'name' => $university['name'],
            'state_id' => $university['state_id'],
            'city_id' => $university['city_id'],
            'university_type' => $university['university_type'],
            'ownership' => $university['ownership'],
            'accreditation' => $university['accreditation'],

            'ranking' => $university['ranking'],
            'average_package' => $university['average_package'],
            'highest_package' => $university['highest_package'],
            'placement_percentage' => $university['placement_percentage'],

            'status' => true,
            'featured' => false,
        ]
    );

    
}
    }
}