<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudyAbroadVisaCountry;
use App\Models\StudyAbroadVisaGuide;

class StudyAbroadVisaGuideSeeder extends Seeder
{
    public function run(): void
    {
        $guides = [
            [
                'country_code' => 'US',
                'page_title' => 'USA Student Visa Guide',
                'overview' => 'The F-1 visa is commonly used by international students who plan to study at an eligible educational institution in the United States.',
                'processing_time' => 'Varies by applicant and visa appointment availability',
                'application_fee' => 'Check the current official visa fee before applying',
                'financial_requirement' => 'Students generally need to demonstrate sufficient funds to support their education and living expenses.',
                'eligibility' => 'Students generally need admission to an eligible institution and the required documentation for their visa application.',
                'official_website' => 'https://travel.state.gov/',
                'status' => 1,
            ],

            [
                'country_code' => 'GB',
                'page_title' => 'UK Student Visa Guide',
                'overview' => 'The UK Student visa allows eligible international students to study at approved educational institutions in the United Kingdom.',
                'processing_time' => 'Varies depending on application type and location',
                'application_fee' => 'Check the current official UK visa fee before applying',
                'financial_requirement' => 'Applicants may need to demonstrate that they have sufficient funds for tuition and living expenses.',
                'eligibility' => 'Students generally need an offer from a licensed student sponsor and must satisfy the applicable visa requirements.',
                'official_website' => 'https://www.gov.uk/student-visa',
                'status' => 1,
            ],

            [
                'country_code' => 'CA',
                'page_title' => 'Canada Study Permit Guide',
                'overview' => 'International students generally require a study permit to study at a Canadian designated learning institution for eligible programs.',
                'processing_time' => 'Varies depending on application and location',
                'application_fee' => 'Check the current official Canadian immigration fee before applying',
                'financial_requirement' => 'Applicants generally need to demonstrate sufficient funds for tuition, living expenses and applicable travel costs.',
                'eligibility' => 'Students generally need admission to a designated learning institution and must satisfy Canadian immigration requirements.',
                'official_website' => 'https://www.canada.ca/en/services/immigration-citizenship.html',
                'status' => 1,
            ],

            [
                'country_code' => 'AU',
                'page_title' => 'Australia Student Visa Guide',
                'overview' => 'The Student visa Subclass 500 allows eligible international students to study in Australia under the applicable student visa conditions.',
                'processing_time' => 'Varies depending on application circumstances',
                'application_fee' => 'Check the current official Australian visa fee before applying',
                'financial_requirement' => 'Applicants may need to demonstrate access to sufficient funds for their study and living costs.',
                'eligibility' => 'Students generally need an eligible course and must satisfy the applicable Australian student visa requirements.',
                'official_website' => 'https://immi.homeaffairs.gov.au/',
                'status' => 1,
            ],

            [
                'country_code' => 'DE',
                'page_title' => 'Germany Student Visa Guide',
                'overview' => 'International students who require a visa can use the applicable German student visa route to begin their studies in Germany.',
                'processing_time' => 'Varies depending on embassy or consulate and application circumstances',
                'application_fee' => 'Check the current German visa fee before applying',
                'financial_requirement' => 'Students may need to demonstrate sufficient financial resources for their stay.',
                'eligibility' => 'Applicants generally need admission or appropriate proof of study plans and must satisfy the applicable German visa requirements.',
                'official_website' => 'https://www.auswaertiges-amt.de/',
                'status' => 1,
            ],

            [
                'country_code' => 'IE',
                'page_title' => 'Ireland Student Visa Guide',
                'overview' => 'International students can apply through the applicable Irish immigration process when a visa is required for their studies.',
                'processing_time' => 'Varies depending on application circumstances',
                'application_fee' => 'Check the current official Irish immigration fee before applying',
                'financial_requirement' => 'Applicants may need to show evidence of sufficient funds for their education and stay.',
                'eligibility' => 'Students generally need an eligible course and must satisfy the applicable Irish immigration requirements.',
                'official_website' => 'https://www.irishimmigration.ie/',
                'status' => 1,
            ],

            [
                'country_code' => 'NZ',
                'page_title' => 'New Zealand Student Visa Guide',
                'overview' => 'The New Zealand student visa process allows eligible international students to study at approved educational institutions.',
                'processing_time' => 'Varies depending on application circumstances',
                'application_fee' => 'Check the current official New Zealand immigration fee before applying',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient funds for tuition and living expenses.',
                'eligibility' => 'Students generally need an appropriate offer of place and must satisfy the applicable immigration requirements.',
                'official_website' => 'https://www.immigration.govt.nz/',
                'status' => 1,
            ],

            [
                'country_code' => 'FR',
                'page_title' => 'France Student Visa Guide',
                'overview' => 'International students who require a visa can follow the applicable French student visa process for their study program.',
                'processing_time' => 'Varies depending on application circumstances',
                'application_fee' => 'Check the current official French visa fee before applying',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for their studies and stay.',
                'eligibility' => 'Students generally need admission to an eligible educational program and must satisfy the applicable French visa requirements.',
                'official_website' => 'https://france-visas.gouv.fr/',
                'status' => 1,
            ],
            [
                'country_code' => 'AR',
                'page_title' => 'Argentina Student Visa Guide',
                'overview' => 'International students planning to study in Argentina can follow the applicable student visa and immigration process based on their study program and circumstances.',
                'processing_time' => 'Varies depending on application circumstances and immigration processing.',
                'application_fee' => 'Check the current official Argentine immigration or consular fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources to support their education and stay in Argentina.',
                'eligibility' => 'Students generally need admission to an eligible educational institution and must satisfy the applicable Argentine immigration requirements.',
                'official_website' => 'https://www.argentina.gob.ar/interior/migraciones',
                'status' => 1,
            ],

            [
                'country_code' => 'AM',
                'page_title' => 'Armenia Student Visa Guide',
                'overview' => 'International students planning to study in Armenia can follow the applicable visa and immigration process based on their study program and nationality.',
                'processing_time' => 'Varies depending on application circumstances and visa processing.',
                'application_fee' => 'Check the current official Armenian visa fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for tuition and living expenses.',
                'eligibility' => 'Students generally need admission to an eligible educational institution and must satisfy the applicable Armenian immigration requirements.',
                'official_website' => 'https://www.mfa.am/en/visa/',
                'status' => 1,
            ],

            [
                'country_code' => 'AT',
                'page_title' => 'Austria Student Visa Guide',
                'overview' => 'International students planning to study in Austria can follow the applicable residence permit or visa process based on their nationality and duration of study.',
                'processing_time' => 'Varies depending on application type and processing authority.',
                'application_fee' => 'Check the current official Austrian visa and residence permit fees before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient funds to cover tuition, accommodation and living expenses.',
                'eligibility' => 'Students generally need admission to an Austrian educational institution and must satisfy the applicable immigration requirements.',
                'official_website' => 'https://www.oesterreich.gv.at/en/themen/leben_in_oesterreich/aufenthalt/Seite.120200.html',
                'status' => 1,
            ],

            [
                'country_code' => 'BE',
                'page_title' => 'Belgium Student Visa Guide',
                'overview' => 'International students who plan to study in Belgium can apply through the applicable long-stay visa and residence process.',
                'processing_time' => 'Varies depending on application circumstances and processing authority.',
                'application_fee' => 'Check the current official Belgian immigration and visa fees before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial means for their studies and stay.',
                'eligibility' => 'Students generally need admission to a recognised Belgian educational institution and must satisfy applicable visa requirements.',
                'official_website' => 'https://dofi.ibz.be/en',
                'status' => 1,
            ],

            [
                'country_code' => 'FI',
                'page_title' => 'Finland Student Visa Guide',
                'overview' => 'International students planning to study in Finland generally follow the applicable residence permit process for studies.',
                'processing_time' => 'Varies depending on application circumstances and processing authority.',
                'application_fee' => 'Check the current official Finnish immigration fee before applying.',
                'financial_requirement' => 'Students generally need to demonstrate sufficient funds for living expenses during their studies.',
                'eligibility' => 'Applicants generally need admission to a Finnish educational institution and must satisfy the applicable residence permit requirements.',
                'official_website' => 'https://migri.fi/en/studying-in-finland',
                'status' => 1,
            ],

            [
                'country_code' => 'IT',
                'page_title' => 'Italy Student Visa Guide',
                'overview' => 'International students planning to study in Italy can follow the applicable student visa process based on their course and nationality.',
                'processing_time' => 'Varies depending on the consulate, application type and individual circumstances.',
                'application_fee' => 'Check the current official Italian visa fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for their studies and stay.',
                'eligibility' => 'Students generally need admission to an eligible Italian educational institution and must satisfy the applicable visa requirements.',
                'official_website' => 'https://vistoperitalia.esteri.it/',
                'status' => 1,
            ],

            [
                'country_code' => 'JP',
                'page_title' => 'Japan Student Visa Guide',
                'overview' => 'International students planning to study in Japan generally need to follow the applicable Certificate of Eligibility and student visa process.',
                'processing_time' => 'Varies depending on the Certificate of Eligibility and visa application process.',
                'application_fee' => 'Check the current official Japanese visa fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources to support their studies and living expenses.',
                'eligibility' => 'Students generally need acceptance from an eligible Japanese educational institution and must satisfy immigration requirements.',
                'official_website' => 'https://www.mofa.go.jp/j_info/visit/visa/',
                'status' => 1,
            ],

            [
                'country_code' => 'KR',
                'page_title' => 'South Korea Student Visa Guide',
                'overview' => 'International students planning to study in South Korea can apply through the applicable student visa process based on their study program.',
                'processing_time' => 'Varies depending on visa type, nationality and application circumstances.',
                'application_fee' => 'Check the current official Korean visa fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for tuition and living expenses.',
                'eligibility' => 'Students generally need admission to an eligible Korean educational institution and must satisfy the applicable immigration requirements.',
                'official_website' => 'https://www.visa.go.kr/',
                'status' => 1,
            ],

            [
                'country_code' => 'NL',
                'page_title' => 'Netherlands Student Visa Guide',
                'overview' => 'International students planning to study in the Netherlands generally follow the applicable entry and residence permit process for study.',
                'processing_time' => 'Varies depending on application circumstances and immigration processing.',
                'application_fee' => 'Check the current official Dutch immigration fees before applying.',
                'financial_requirement' => 'Students generally need to demonstrate sufficient funds for living expenses during their studies.',
                'eligibility' => 'Applicants generally need admission to a recognised Dutch educational institution and must satisfy the applicable immigration requirements.',
                'official_website' => 'https://ind.nl/en/residence-permits/study',
                'status' => 1,
            ],

            [
                'country_code' => 'PL',
                'page_title' => 'Poland Student Visa Guide',
                'overview' => 'International students planning to study in Poland can follow the applicable national student visa and residence process.',
                'processing_time' => 'Varies depending on the consulate, application type and individual circumstances.',
                'application_fee' => 'Check the current official Polish visa fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient funds for tuition, accommodation and living expenses.',
                'eligibility' => 'Students generally need admission to a recognised Polish educational institution and must satisfy applicable visa requirements.',
                'official_website' => 'https://www.gov.pl/web/diplomacy/visas',
                'status' => 1,
            ],

            [
                'country_code' => 'PT',
                'page_title' => 'Portugal Student Visa Guide',
                'overview' => 'International students planning to study in Portugal can follow the applicable study visa and residence process.',
                'processing_time' => 'Varies depending on application circumstances and processing authority.',
                'application_fee' => 'Check the current official Portuguese visa fee before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for tuition and living expenses.',
                'eligibility' => 'Students generally need admission to an eligible Portuguese educational institution and must satisfy immigration requirements.',
                'official_website' => 'https://vistos.mne.gov.pt/en/',
                'status' => 1,
            ],

            [
                'country_code' => 'ES',
                'page_title' => 'Spain Student Visa Guide',
                'overview' => 'International students planning to study in Spain can follow the applicable student visa process for their chosen course and duration of study.',
                'processing_time' => 'Varies depending on consulate, application type and individual circumstances.',
                'application_fee' => 'Check the current official Spanish visa fee before applying.',
                'financial_requirement' => 'Applicants generally need to demonstrate sufficient financial resources for their stay in Spain.',
                'eligibility' => 'Students generally need admission to an eligible Spanish educational institution and must satisfy the applicable visa requirements.',
                'official_website' => 'https://www.exteriores.gob.es/',
                'status' => 1,
            ],

            [
                'country_code' => 'SE',
                'page_title' => 'Sweden Student Visa Guide',
                'overview' => 'International students planning to study in Sweden generally apply for a residence permit for studies when required.',
                'processing_time' => 'Varies depending on application circumstances and processing authority.',
                'application_fee' => 'Check the current official Swedish residence permit fee before applying.',
                'financial_requirement' => 'Applicants generally need to demonstrate sufficient funds to support themselves during their studies.',
                'eligibility' => 'Students generally need admission to an eligible Swedish educational institution and must satisfy residence permit requirements.',
                'official_website' => 'https://www.migrationsverket.se/en/you-want-to-apply/study.html',
                'status' => 1,
            ],

            [
                'country_code' => 'CH',
                'page_title' => 'Switzerland Student Visa Guide',
                'overview' => 'International students planning to study in Switzerland can follow the applicable visa and residence permit process based on their nationality and study duration.',
                'processing_time' => 'Varies depending on canton, application type and individual circumstances.',
                'application_fee' => 'Check the current official Swiss visa and residence permit fees before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for their education and stay.',
                'eligibility' => 'Students generally need admission to an eligible Swiss educational institution and must satisfy applicable immigration requirements.',
                'official_website' => 'https://www.sem.admin.ch/sem/en/home/themen/einreise.html',
                'status' => 1,
            ],

            [
                'country_code' => 'SG',
                'page_title' => 'Singapore Student Visa Guide',
                'overview' => 'International students planning to study in Singapore generally need to follow the Student Pass application process for their approved course.',
                'processing_time' => 'Varies depending on institution, application type and individual circumstances.',
                'application_fee' => 'Check the current official Singapore immigration fees before applying.',
                'financial_requirement' => 'Applicants may need to demonstrate sufficient financial resources for their education and stay.',
                'eligibility' => 'Students generally need acceptance from an approved educational institution and must satisfy Student Pass requirements.',
                'official_website' => 'https://www.ica.gov.sg/reside/STP',
                'status' => 1,
            ],
        ];

        foreach ($guides as $guide) {

            $country = StudyAbroadVisaCountry::where(
                'country_code',
                $guide['country_code']
            )->first();

            if (!$country) {
                continue;
            }

            StudyAbroadVisaGuide::updateOrCreate(
                [
                    'visa_country_id' => $country->id,
                ],
                [
                    'page_title' => $guide['page_title'],
                    'overview' => $guide['overview'],
                    'processing_time' => $guide['processing_time'],
                    'application_fee' => $guide['application_fee'],
                    'financial_requirement' => $guide['financial_requirement'],
                    'eligibility' => $guide['eligibility'],
                    'official_website' => $guide['official_website'],
                    'status' => $guide['status'],
                ]
            );
        }
    }
}
