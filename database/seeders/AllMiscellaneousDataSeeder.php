<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationMasterData;

class AllMiscellaneousDataSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Indian Cities
        |--------------------------------------------------------------------------
        */

        $cities = [
            'Mumbai',
            'Delhi',
            'Bangalore',
            'Hyderabad',
            'Ahmedabad',
            'Chennai',
            'Kolkata',
            'Pune',
            'Jaipur',
            'Surat',
            'Lucknow',
            'Kanpur',
            'Nagpur',
            'Indore',
            'Thane',
            'Bhopal',
            'Visakhapatnam',
            'Pimpri-Chinchwad',
            'Patna',
            'Vadodara',
            'Ghaziabad',
            'Ludhiana',
            'Agra',
            'Nashik',
            'Faridabad',
            'Meerut',
            'Rajkot',
            'Varanasi',
            'Srinagar',
            'Aurangabad',
            'Dhanbad',
            'Amritsar',
            'Navi Mumbai',
            'Prayagraj',
            'Ranchi',
            'Howrah',
            'Coimbatore',
            'Jabalpur',
            'Gwalior',
            'Vijayawada',
            'Jodhpur',
            'Madurai',
            'Raipur',
            'Kota',
            'Chandigarh',
            'Guwahati',
            'Solapur',
            'Hubli-Dharwad',
            'Mysore',
            'Tiruchirappalli',
            'Bareilly',
            'Aligarh',
            'Tiruppur',
            'Gurugram',
            'Noida',
            'Dehradun',
            'Kochi',
            'Bhubaneswar',
            'Salem',
            'Warangal',
            'Guntur',
            'Bikaner',
            'Amravati',
            'Jalandhar',
            'Bhilai',
            'Cuttack',
            'Firozabad',
            'Kollam',
            'Bokaro',
            'Thiruvananthapuram',
            'Udaipur',
            'Ajmer',
            'Jamnagar',
            'Bharatpur',
            'Mangaluru',
            'Erode',
            'Belagavi',
            'Durgapur',
            'Asansol',
            'Nanded',
            'Kolhapur',
            'Siliguri',
            'Rourkela',
            'Jhansi',
            'Kakinada',
            'Nellore',
            'Tirupati',
            'Anantapur',
            'Kurnool',
            'Rajahmundry',
            'Puducherry',
            'Vellore',
            'Thanjavur',
            'Tirunelveli',
            'Dindigul',
        ];

        foreach (array_unique($cities) as $city) {
            ApplicationMasterData::firstOrCreate(
                [
                    'type' => 'city',
                    'name' => $city,
                ],
                [
                    'status' => 1,
                ]
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Courses
        |--------------------------------------------------------------------------
        */

        $courses = [
            // Engineering & Technology
            'B.Tech',
            'B.E.',
            'M.Tech',
            'M.E.',
            'B.Tech + M.Tech',
            'Integrated B.Tech',

            // Computer & IT
            'BCA',
            'MCA',
            'B.Sc Computer Science',
            'B.Sc Information Technology',
            'M.Sc Computer Science',
            'M.Sc Information Technology',

            // Management
            'BBA',
            'BMS',
            'MBA',
            'PGDM',
            'Executive MBA',

            // Commerce & Finance
            'B.Com',
            'B.Com (Hons)',
            'M.Com',
            'CA',
            'CMA',
            'CS',

            // Arts & Humanities
            'BA',
            'BA (Hons)',
            'MA',
            'BJMC',
            'MJMC',
            'BSW',
            'MSW',

            // Science
            'B.Sc',
            'B.Sc (Hons)',
            'M.Sc',

            // Medical
            'MBBS',
            'BDS',
            'BAMS',
            'BHMS',
            'BPT',
            'MD',
            'MS',
            'MDS',

            // Pharmacy
            'B.Pharm',
            'M.Pharm',
            'Pharm.D',

            // Law
            'LLB',
            'LLM',
            'BA LLB',
            'BBA LLB',
            'B.Com LLB',

            // Design & Architecture
            'B.Des',
            'M.Des',
            'B.Arch',
            'M.Arch',
            'BFA',
            'MFA',

            // Education
            'B.Ed',
            'M.Ed',
            'B.El.Ed',

            // Hotel Management
            'BHM',
            'MHM',

            // Other Professional Courses
            'B.Voc',
            'M.Voc',
            'Diploma',
            'PG Diploma',
            'Certificate Course',
            'PhD',
        ];

        foreach (array_unique($courses) as $course) {
            ApplicationMasterData::firstOrCreate(
                [
                    'type' => 'course',
                    'name' => $course,
                ],
                [
                    'status' => 1,
                ]
            );
        }
    }
}