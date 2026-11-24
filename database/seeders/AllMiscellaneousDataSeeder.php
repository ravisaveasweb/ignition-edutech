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

        // streams data 

        $streams = [
            'Engineering & Technology',
            'Computer Science & IT',
            'Management',
            'Commerce & Finance',
            'Arts & Humanities',
            'Science',
            'Medical',
            'Nursing & Allied Health Sciences',
            'Pharmacy',
            'Law',
            'Design & Fine Arts',
            'Architecture & Planning',
            'Education & Teaching',
            'Hotel Management & Hospitality',
            'Agriculture & Allied Sciences',
            'Veterinary Sciences',
            'Journalism & Mass Communication',
            'Economics',
            'Aviation & Aerospace',
            'Maritime & Merchant Navy',
            'Sports & Physical Education',
            'Social Work',
            'Library & Information Science',
            'Vocational & Skill-Based Courses',
            'Research & Doctoral Studies',
        ];

        foreach (array_unique($streams) as $stream) {
            ApplicationMasterData::firstOrCreate(
                [
                    'type' => 'stream',
                    'name' => $stream,
                ],
                [
                    'status' => 1,
                ]
            );
        }











        // For abroad data

        // Ignition specific universities and country 


        $IgnitionCountries = [
            'Australia',
            'UK (United Kingdom)',
            'Canada',
            'USA (United States)',
            'New Zealand',
            'Singapore',
            'France',
            'Germany',
            'Spain',
            'Italy',
            'Netherlands',
            'Switzerland',
            'Sweden',
            'Latvia',
            'Lithuania',
            'Malta',
            'Finland',
            'Norway',
            'Denmark',
            'Malaysia',
            'Rest of Europe',
        ];

        foreach ($IgnitionCountries as $country) {
            ApplicationMasterData::firstOrCreate(
                [
                    'type' => 'ignitionCountry',
                    'name' => $country,
                ],
                [
                    'status' => 1,
                ]

            );
        }



        $IgnitionCountryUniversities = [

            'Australia' => [
                'University of Melbourne',
                'University of Sydney',
                'Australian National University (ANU)',
                'University of Queensland',
                'Monash University',
                'University of New South Wales (UNSW)',
                'University of Western Australia (UWA)',
                'University of Adelaide',
                'University of Technology Sydney (UTS)',
                'Macquarie University',
                'RMIT University',
                'Deakin University',
                'University of Wollongong',
                'Curtin University',
                'Queensland University of Technology (QUT)',
                'La Trobe University',
                'Griffith University',
                'University of Newcastle',
                'Swinburne University of Technology',
                'Western Sydney University',
            ],

            'UK (United Kingdom)' => [
                'University of Oxford',
                'University of Cambridge',
                'Imperial College London',
                'University College London (UCL)',
                'London School of Economics and Political Science (LSE)',
                'University of Edinburgh',
                'University of Manchester',
                'King’s College London',
                'University of Bristol',
                'University of Warwick',
                'University of Glasgow',
                'University of Birmingham',
                'University of Leeds',
                'University of Southampton',
                'University of Nottingham',
                'University of Sheffield',
                'University of Exeter',
                'University of York',
                'University of Liverpool',
                'Newcastle University',
            ],

            'Canada' => [
                'University of Toronto',
                'University of British Columbia (UBC)',
                'McGill University',
                'McMaster University',
                'University of Alberta',
                'University of Waterloo',
                'Western University',
                'University of Calgary',
                'Queen’s University',
                'University of Ottawa',
                'Dalhousie University',
                'Simon Fraser University',
                'University of Victoria',
                'York University',
                'University of Manitoba',
                'University of Saskatchewan',
                'Carleton University',
                'Concordia University',
                'Toronto Metropolitan University',
                'Memorial University of Newfoundland',
            ],

            'USA (United States)' => [
                'Harvard University',
                'Stanford University',
                'Massachusetts Institute of Technology (MIT)',
                'California Institute of Technology (Caltech)',
                'University of Chicago',
                'Princeton University',
                'Yale University',
                'Columbia University',
                'University of Pennsylvania',
                'Cornell University',
                'University of California, Berkeley',
                'University of California, Los Angeles (UCLA)',
                'University of Michigan',
                'New York University (NYU)',
                'University of Southern California (USC)',
                'Carnegie Mellon University',
                'Boston University',
                'Northeastern University',
                'University of Illinois Urbana-Champaign',
                'University of Washington',
            ],

            'New Zealand' => [
                'University of Auckland',
                'University of Otago',
                'Victoria University of Wellington',
                'University of Canterbury',
                'Massey University',
                'University of Waikato',
                'Lincoln University',
                'Auckland University of Technology (AUT)',
            ],

            'Singapore' => [
                'National University of Singapore (NUS)',
                'Nanyang Technological University (NTU)',
                'Singapore Management University (SMU)',
                'Singapore University of Technology and Design (SUTD)',
                'Singapore Institute of Technology (SIT)',
                'Singapore University of Social Sciences (SUSS)',
                'James Cook University Singapore',
                'INSEAD Singapore',
            ],

            'France' => [
                'Sorbonne University',
                'Université Paris-Saclay',
                'Institut Polytechnique de Paris',
                'École Polytechnique',
                'HEC Paris',
                'ESSEC Business School',
                'ESCP Business School',
                'Sciences Po',
                'Université PSL',
                'University of Strasbourg',
                'Aix-Marseille University',
                'University of Bordeaux',
                'University of Montpellier',
                'University of Lyon',
                'Grenoble INP',
            ],

            'Germany' => [
                'Technical University of Munich (TUM)',
                'Ludwig Maximilian University of Munich (LMU)',
                'Heidelberg University',
                'Humboldt University of Berlin',
                'Free University of Berlin',
                'RWTH Aachen University',
                'Karlsruhe Institute of Technology (KIT)',
                'Technical University of Berlin',
                'University of Freiburg',
                'University of Hamburg',
                'University of Bonn',
                'University of Cologne',
                'University of Göttingen',
                'University of Mannheim',
                'University of Stuttgart',
            ],

            'Spain' => [
                'University of Barcelona',
                'Autonomous University of Barcelona',
                'Complutense University of Madrid',
                'Autonomous University of Madrid',
                'University of Valencia',
                'Pompeu Fabra University',
                'University of Navarra',
                'IE University',
                'IESE Business School',
                'ESADE Business School',
                'Carlos III University of Madrid',
                'Polytechnic University of Madrid',
                'University of Seville',
                'University of Granada',
                'University of Salamanca',
            ],

            'Italy' => [
                'University of Bologna',
                'Sapienza University of Rome',
                'University of Padua',
                'University of Milan',
                'Politecnico di Milano',
                'University of Turin',
                'University of Pisa',
                'University of Florence',
                'University of Naples Federico II',
                'Politecnico di Torino',
                'University of Trento',
                'University of Siena',
                'University of Pavia',
                'University of Rome Tor Vergata',
                'Bocconi University',
            ],

            'Netherlands' => [
                'University of Amsterdam',
                'Delft University of Technology',
                'Eindhoven University of Technology',
                'Erasmus University Rotterdam',
                'Leiden University',
                'Utrecht University',
                'University of Groningen',
                'Maastricht University',
                'Wageningen University & Research',
                'Vrije Universiteit Amsterdam',
                'Radboud University',
                'University of Twente',
                'Tilburg University',
            ],

            'Sweden' => [
                'Lund University',
                'KTH Royal Institute of Technology',
                'Uppsala University',
                'Stockholm University',
                'University of Gothenburg',
                'Chalmers University of Technology',
                'Linköping University',
                'Umeå University',
                'Örebro University',
                'Malmö University',
            ],

            'Switzerland' => [
                'ETH Zurich',
                'EPFL',
                'University of Zurich',
                'University of Geneva',
                'University of Lausanne',
                'University of Bern',
                'University of Basel',
                'University of St. Gallen',
                'Università della Svizzera italiana',
                'Lucerne University of Applied Sciences and Arts',
            ],

            'Latvia' => [
                'University of Latvia',
                'Riga Technical University',
                'Riga Stradiņš University',
                'Latvia University of Life Sciences and Technologies',
                'Stockholm School of Economics in Riga',
                'Riga Graduate School of Law',
                'BA School of Business and Finance',
                'Turiba University',
                'Rēzekne Academy of Technologies',
                'Vidzeme University of Applied Sciences',
            ],

            'Lithuania' => [
                'Vilnius University',
                'Vilnius Gediminas Technical University',
                'Kaunas University of Technology',
                'Vytautas Magnus University',
                'Lithuanian University of Health Sciences',
                'Mykolas Romeris University',
                'Klaipeda University',
                'ISM University of Management and Economics',
                'European Humanities University',
                'LCC International University',
            ],

            'Malta' => [
                'University of Malta',
                'Malta College of Arts, Science and Technology (MCAST)',
                'American University of Malta',
                'Global College Malta',
                'St. Martin’s Institute of Higher Education',
                'Institute of Tourism Studies',
                'Malta Business School',
            ],

            'Finland' => [
                'University of Helsinki',
                'Aalto University',
                'University of Turku',
                'Tampere University',
                'University of Oulu',
                'University of Jyväskylä',
                'University of Eastern Finland',
                'Åbo Akademi University',
                'LUT University',
            ],

            'Norway' => [
                'University of Oslo',
                'Norwegian University of Science and Technology (NTNU)',
                'University of Bergen',
                'UiT The Arctic University of Norway',
                'Norwegian University of Life Sciences',
                'University of Stavanger',
                'University of Agder',
                'BI Norwegian Business School',
                'Oslo Metropolitan University',
                'Western Norway University of Applied Sciences',
            ],

            'Denmark' => [
                'University of Copenhagen',
                'Technical University of Denmark (DTU)',
                'Aarhus University',
                'Aalborg University',
                'Copenhagen Business School',
                'Roskilde University',
                'IT University of Copenhagen',
                'University of Southern Denmark',
                'VIA University College',
                'Aarhus School of Architecture',
            ],

            'Malaysia' => [
                'University of Malaya (UM)',
                'Universiti Putra Malaysia (UPM)',
                'Universiti Kebangsaan Malaysia (UKM)',
                'Universiti Sains Malaysia (USM)',
                'Universiti Teknologi Malaysia (UTM)',
                'Taylor’s University',
                'Monash University Malaysia',
                'University of Nottingham Malaysia',
                'Sunway University',
                'INTI International University',
                'Asia Pacific University (APU)',
                'UCSI University',
                'Multimedia University (MMU)',
                'HELP University',
                'SEGi University',
            ],

            'Rest of Europe' => [
                'Trinity College Dublin',
                'University College Dublin',
                'University of Vienna',
                'Charles University',
                'University of Warsaw',
                'University of Helsinki',
                'University of Lisbon',
                'University of Porto',
                'University of Ljubljana',
                'University of Zagreb',
                'University of Belgrade',
                'University of Bucharest',
                'University of Luxembourg',
                'University of Tartu',
            ],

        ];

        foreach ($IgnitionCountryUniversities as $country => $universities) {
            foreach ($universities as $university) {
                ApplicationMasterData::firstOrCreate(
                    [
                        'type' => 'ignitionUniversity',
                        'name' => $university,
                    ],
                    [
                        'status' => 1,
                    ]
                );
            }
        }
    }
}
