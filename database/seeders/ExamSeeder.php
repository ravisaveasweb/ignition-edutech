<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    public function run(): void
    {
        
        Exam::updateOrCreate(
            ['slug' => 'ielts'],
            [
                'name' => 'IELTS',
                'full_name' => 'International English Language Testing System',
                'exam_type' => 'English Language Proficiency Test',
                'status' => true,
            ]
        );

        Exam::updateOrCreate(
            ['slug' => 'pte'],
            [
                'name' => 'PTE',
                'full_name' => 'Pearson Test of English',
                'exam_type' => 'English Language Proficiency Test',
                'status' => true,
            ]
        );

        Exam::updateOrCreate(
            ['slug' => 'toefl'],
            [
                'name' => 'TOEFL',
                'full_name' => 'Test of English as a Foreign Language',
                'exam_type' => 'English Language Proficiency Test',
                'status' => true,
            ]
        );

        Exam::updateOrCreate(
            ['slug' => 'gre'],
            [
                'name' => 'GRE',
                'full_name' => 'Graduate Record Examination',
                'exam_type' => 'Graduate Admission Test',
                'status' => true,
            ]
        );

        Exam::updateOrCreate(
            ['slug' => 'gmat'],
            [
                'name' => 'GMAT',
                'full_name' => 'Graduate Management Admission Test',
                'exam_type' => 'Graduate Management Admission Test',
                'status' => true,
            ]
        );
    }
}