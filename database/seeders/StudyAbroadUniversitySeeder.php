<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudyAbroadUniversity;

class StudyAbroadUniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* =====================================================
           AUSTRALIA
        ===================================================== */

        $australiaUniversities = [
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
        ];

        foreach ($australiaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'australia',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           UK
        ===================================================== */

        $ukUniversities = [
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
        ];

        foreach ($ukUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'uk',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           CANADA
        ===================================================== */

        $canadaUniversities = [
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
        ];

        foreach ($canadaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'canada',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           USA
        ===================================================== */

        $usaUniversities = [
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
        ];

        foreach ($usaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'usa',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           NEW ZEALAND
        ===================================================== */

        $newZealandUniversities = [
            'University of Auckland',
            'University of Otago',
            'Victoria University of Wellington',
            'University of Canterbury',
            'Massey University',
            'University of Waikato',
            'Lincoln University',
            'Auckland University of Technology (AUT)',
        ];

        foreach ($newZealandUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'newZealand',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           SINGAPORE
        ===================================================== */

        $singaporeUniversities = [
            'National University of Singapore (NUS)',
            'Nanyang Technological University (NTU)',
            'Singapore Management University (SMU)',
            'Singapore University of Technology and Design (SUTD)',
            'Singapore Institute of Technology (SIT)',
            'Singapore University of Social Sciences (SUSS)',
            'James Cook University Singapore',
            'INSEAD Singapore',
        ];

        foreach ($singaporeUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'singapore',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           FRANCE
        ===================================================== */

        $franceUniversities = [
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
        ];

        foreach ($franceUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'france',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           GERMANY
        ===================================================== */

        $germanyUniversities = [
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
        ];

        foreach ($germanyUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'germany',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           SPAIN
        ===================================================== */

        $spainUniversities = [
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
        ];

        foreach ($spainUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'spain',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           ITALY
        ===================================================== */

        $italyUniversities = [
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
        ];

        foreach ($italyUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'italy',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           NETHERLANDS
        ===================================================== */

        $netherlandsUniversities = [
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
        ];

        foreach ($netherlandsUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'netherlands',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           SWITZERLAND
        ===================================================== */

        $switzerlandUniversities = [
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
        ];

        foreach ($switzerlandUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'switzerland',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           SWEDEN
        ===================================================== */

        $swedenUniversities = [
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
        ];

        foreach ($swedenUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'sweden',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           LATVIA
        ===================================================== */

        $latviaUniversities = [
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
        ];

        foreach ($latviaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'latvia',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           LITHUANIA
        ===================================================== */

        $lithuaniaUniversities = [
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
        ];

        foreach ($lithuaniaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'lithuania',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           MALTA
        ===================================================== */

        $maltaUniversities = [
            'University of Malta',
            'Malta College of Arts, Science and Technology (MCAST)',
            'American University of Malta',
            'Global College Malta',
            'St. Martin’s Institute of Higher Education',
            'Institute of Tourism Studies',
            'Malta Business School',
        ];

        foreach ($maltaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'malta',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           FINLAND
        ===================================================== */

        $finlandUniversities = [
            'University of Helsinki',
            'Aalto University',
            'University of Turku',
            'Tampere University',
            'University of Oulu',
            'University of Jyväskylä',
            'University of Eastern Finland',
            'Åbo Akademi University',
            'LUT University',
        ];

        foreach ($finlandUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'finland',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           NORWAY
        ===================================================== */

        $norwayUniversities = [
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
        ];

        foreach ($norwayUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'norway',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           DENMARK
        ===================================================== */

        $denmarkUniversities = [
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
        ];

        foreach ($denmarkUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'denmark',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           MALAYSIA
        ===================================================== */

        $malaysiaUniversities = [
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
        ];

        foreach ($malaysiaUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'malaysia',
                'university_name' => $university,
                'status' => 1,
            ]);

        }


        /* =====================================================
           REST OF EUROPE
        ===================================================== */

        $restOfEuropeUniversities = [
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
        ];

        foreach ($restOfEuropeUniversities as $university) {

            StudyAbroadUniversity::create([
                'country' => 'restOfEurope',
                'university_name' => $university,
                'status' => 1,
            ]);

        }
    }
}