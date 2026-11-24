<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Data\GlobalScholarships;
use App\Models\GlobalScholarshipData;

class GlobalScholarshipDataSeeder extends Seeder
{
    public function run(): void
    {
        $scholarships = GlobalScholarships::all();

        foreach (array_chunk($scholarships, 500) as $chunk) {
            GlobalScholarshipData::upsert(
                $chunk,
                ['scholarship_id'],
                [
                    'scholarship_name',
                    'provider',
                    'target_groups',
                    'subject_areas',
                    'eligible_countries',
                    'study_purpose',
                    'description_en',
                    'host_country',
                    'scholarship_amount',
                    'degree_level',
                    'duration',
                    'updated_at',
                ]
            );
        }

        $this->command->info(
            'Global scholarships imported successfully: ' . count($scholarships)
        );
    }
}