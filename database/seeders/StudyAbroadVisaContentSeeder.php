<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudyAbroadVisaCountry;
use App\Models\StudyAbroadVisaStep;
use App\Models\StudyAbroadVisaDocument;
use App\Models\StudyAbroadVisaFaq;

class StudyAbroadVisaContentSeeder extends Seeder
{
    public function run(): void
    {
        $content = [

            'US' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Get Admission',
                        'description' => 'Receive admission from an eligible educational institution and obtain the required student documentation.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare your passport, admission documents, financial evidence and other required supporting documents.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Complete Visa Application',
                        'description' => 'Complete the applicable visa application process and provide accurate information.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Pay Required Fees',
                        'description' => 'Pay the applicable visa and other required charges according to the official process.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Attend Appointment',
                        'description' => 'Attend the required appointment or interview and provide biometrics where applicable.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Receive Decision',
                        'description' => 'Wait for the visa decision and follow the instructions provided with the decision.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Admission documentation',
                    'Academic certificates and transcripts',
                    'Financial evidence',
                    'Required photographs',
                    'Visa application documentation',
                    'English language test result where applicable',
                ],

                'faqs' => [
                    [
                        'question' => 'Which visa is commonly used by international students in the USA?',
                        'answer' => 'The F-1 visa is commonly used by international students studying at eligible educational institutions.',
                    ],
                    [
                        'question' => 'Do students need to prove their finances?',
                        'answer' => 'Applicants may need to demonstrate that they have sufficient funds for their education and living expenses.',
                    ],
                    [
                        'question' => 'Is an interview required?',
                        'answer' => 'Applicants should check the current official requirements to determine whether an interview is required for their circumstances.',
                    ],
                ],
            ],

            'GB' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Receive Admission',
                        'description' => 'Secure admission from an approved education provider and receive the required sponsorship documentation.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare your passport, education documents, financial evidence and other applicable documents.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Complete Application',
                        'description' => 'Complete the applicable UK Student visa application accurately.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Pay Fees',
                        'description' => 'Pay the applicable visa and immigration charges.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Biometrics',
                        'description' => 'Complete the applicable biometrics or identity verification process.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Visa Decision',
                        'description' => 'Wait for the decision and follow the instructions provided by the authorities.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Confirmation of required sponsorship or study documentation',
                    'Academic documents',
                    'Financial evidence where required',
                    'English language evidence where applicable',
                    'TB test certificate where applicable',
                ],

                'faqs' => [
                    [
                        'question' => 'What visa do international students generally use in the UK?',
                        'answer' => 'Eligible international students generally apply for the UK Student visa.',
                    ],
                    [
                        'question' => 'Do financial requirements apply?',
                        'answer' => 'Applicants may need to meet financial requirements depending on their circumstances and current immigration rules.',
                    ],
                    [
                        'question' => 'Is biometrics required?',
                        'answer' => 'Applicants generally need to complete the applicable identity or biometrics process as part of the application.',
                    ],
                ],
            ],

            'CA' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Choose Your Institution',
                        'description' => 'Choose an eligible Canadian educational institution and secure admission.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare admission documents, passport, financial evidence and other supporting documentation.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Submit Application',
                        'description' => 'Complete and submit the applicable Canadian study permit application.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Provide Biometrics',
                        'description' => 'Complete biometrics when required for your application.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Additional Verification',
                        'description' => 'Provide any additional information or documents requested during processing.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Receive Decision',
                        'description' => 'Wait for the application decision and follow the instructions provided.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Letter of acceptance',
                    'Academic documents',
                    'Proof of financial support',
                    'Identity photographs where required',
                    'Study permit application documents',
                ],

                'faqs' => [
                    [
                        'question' => 'What document allows eligible international students to study in Canada?',
                        'answer' => 'Eligible students generally require a Canadian study permit for their studies.',
                    ],
                    [
                        'question' => 'Do students need financial proof?',
                        'answer' => 'Applicants generally need to demonstrate that they have sufficient funds to meet applicable expenses.',
                    ],
                    [
                        'question' => 'Are biometrics required?',
                        'answer' => 'Biometrics may be required depending on the applicant and current Canadian immigration requirements.',
                    ],
                ],
            ],

            'AU' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Receive Confirmation',
                        'description' => 'Secure admission and obtain the required confirmation for your Australian study program.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare passport, academic records, financial evidence and other required documentation.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Create Application',
                        'description' => 'Complete the applicable online student visa application.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Upload Documents',
                        'description' => 'Provide the required supporting documents through the applicable application system.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Health and Identity Checks',
                        'description' => 'Complete applicable health examinations or identity requirements if requested.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Visa Decision',
                        'description' => 'Wait for the application outcome and review the conditions attached to your visa.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Confirmation of Enrolment',
                    'Academic documents',
                    'Financial evidence where required',
                    'English language evidence where applicable',
                    'Health examination documents where requested',
                ],

                'faqs' => [
                    [
                        'question' => 'Which student visa is commonly used in Australia?',
                        'answer' => 'The Student visa Subclass 500 is commonly used by eligible international students.',
                    ],
                    [
                        'question' => 'Will students need health checks?',
                        'answer' => 'Health examinations may be required depending on the applicant and applicable immigration requirements.',
                    ],
                    [
                        'question' => 'Are financial requirements applicable?',
                        'answer' => 'Applicants may need to demonstrate financial capacity according to the current requirements.',
                    ],
                ],
            ],

            'DE' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Secure Admission',
                        'description' => 'Obtain admission or the appropriate study documentation from a German educational institution.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare passport, academic documents, financial evidence and other supporting documents.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Visa Application',
                        'description' => 'Submit the applicable student visa application through the responsible German authority.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Attend Appointment',
                        'description' => 'Attend the applicable visa appointment and provide the required documents.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Verification',
                        'description' => 'The application may undergo document and eligibility verification.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Decision',
                        'description' => 'Receive the decision and follow the instructions provided by the responsible authority.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'University admission documentation',
                    'Academic certificates',
                    'Proof of financial resources',
                    'Health insurance evidence',
                    'Visa application documents',
                ],

                'faqs' => [
                    [
                        'question' => 'Do all international students need a German student visa?',
                        'answer' => 'Visa requirements depend on nationality and individual circumstances. Students should verify the current requirements with the responsible German authority.',
                    ],
                    [
                        'question' => 'Is financial proof required?',
                        'answer' => 'Applicants may need to demonstrate sufficient financial resources for their stay.',
                    ],
                    [
                        'question' => 'Where should students verify current requirements?',
                        'answer' => 'Students should verify the latest requirements through the official German government or responsible mission.',
                    ],
                ],
            ],

            'IE' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Get Admission',
                        'description' => 'Receive admission to an eligible Irish education program.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare passport, admission, academic and financial documents.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Submit Application',
                        'description' => 'Complete the applicable visa application and submit the required documents.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Pay Applicable Fees',
                        'description' => 'Pay any applicable visa charges according to the current process.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Verification',
                        'description' => 'Provide additional information if requested during processing.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Decision',
                        'description' => 'Receive the visa decision and follow the applicable instructions.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Letter of acceptance',
                    'Academic documents',
                    'Financial evidence',
                    'Proof of medical insurance where applicable',
                    'Visa application documents',
                ],

                'faqs' => [
                    [
                        'question' => 'Do students need a visa for Ireland?',
                        'answer' => 'Visa requirements depend on nationality and the duration and purpose of the stay.',
                    ],
                    [
                        'question' => 'Is financial evidence required?',
                        'answer' => 'Applicants may need to provide evidence of sufficient financial resources.',
                    ],
                    [
                        'question' => 'Where can students check the latest requirements?',
                        'answer' => 'Students should verify the latest requirements through the official Irish immigration authorities.',
                    ],
                ],
            ],

            'NZ' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Receive Offer',
                        'description' => 'Secure an offer of place from an eligible New Zealand education provider.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare passport, education documents, financial evidence and other required documents.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Submit Application',
                        'description' => 'Complete the applicable student visa application.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Provide Evidence',
                        'description' => 'Provide financial, health or other evidence where requested.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Application Processing',
                        'description' => 'The application is reviewed by the responsible immigration authority.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Receive Decision',
                        'description' => 'Receive the final application decision.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Offer of place',
                    'Academic documents',
                    'Financial evidence',
                    'Health documents where required',
                    'Visa application documents',
                ],

                'faqs' => [
                    [
                        'question' => 'Which visa is used for study in New Zealand?',
                        'answer' => 'Eligible international students generally apply for the appropriate New Zealand student visa.',
                    ],
                    [
                        'question' => 'Is financial evidence required?',
                        'answer' => 'Applicants may need to demonstrate sufficient funds for their study and stay.',
                    ],
                    [
                        'question' => 'Can additional documents be requested?',
                        'answer' => 'Yes. Immigration authorities may request additional information or supporting documents.',
                    ],
                ],
            ],

            'FR' => [
                'steps' => [
                    [
                        'step_number' => 1,
                        'title' => 'Choose Your Program',
                        'description' => 'Secure admission to an eligible French educational program.',
                    ],
                    [
                        'step_number' => 2,
                        'title' => 'Complete Required Process',
                        'description' => 'Complete any applicable education or visa application steps for your nationality and study program.',
                    ],
                    [
                        'step_number' => 3,
                        'title' => 'Prepare Documents',
                        'description' => 'Prepare passport, admission documents, academic records and financial evidence.',
                    ],
                    [
                        'step_number' => 4,
                        'title' => 'Submit Visa Application',
                        'description' => 'Submit the applicable student visa application through the required process.',
                    ],
                    [
                        'step_number' => 5,
                        'title' => 'Attend Appointment',
                        'description' => 'Attend the applicable appointment and provide required documents.',
                    ],
                    [
                        'step_number' => 6,
                        'title' => 'Receive Decision',
                        'description' => 'Wait for the visa decision and follow the applicable instructions.',
                    ],
                ],

                'documents' => [
                    'Valid passport',
                    'Admission documentation',
                    'Academic certificates',
                    'Financial evidence',
                    'Accommodation evidence where required',
                    'Visa application documents',
                ],

                'faqs' => [
                    [
                        'question' => 'Do students need a French student visa?',
                        'answer' => 'Visa requirements depend on nationality, duration and study circumstances.',
                    ],
                    [
                        'question' => 'Is financial proof required?',
                        'answer' => 'Applicants may need to demonstrate sufficient financial resources according to the applicable requirements.',
                    ],
                    [
                        'question' => 'Where can students verify the current visa process?',
                        'answer' => 'Students should check the official France-Visas website and applicable government guidance.',
                    ],
                ],
            ],
        ];

        foreach ($content as $countryCode => $data) {

            $country = StudyAbroadVisaCountry::where(
                'country_code',
                $countryCode
            )->first();

            if (!$country || !$country->visaGuide) {
                continue;
            }

            $guideId = $country->visaGuide->id;

            /*
            |--------------------------------------------------------------------------
            | STEPS
            |--------------------------------------------------------------------------
            */

            StudyAbroadVisaStep::where(
                'visa_guide_id',
                $guideId
            )->delete();

            foreach ($data['steps'] as $step) {

                StudyAbroadVisaStep::create([
                    'visa_guide_id' => $guideId,
                    'step_number' => $step['step_number'],
                    'title' => $step['title'],
                    'description' => $step['description'],
                    'status' => 1,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | DOCUMENTS
            |--------------------------------------------------------------------------
            */

            StudyAbroadVisaDocument::where(
                'visa_guide_id',
                $guideId
            )->delete();

            foreach ($data['documents'] as $index => $document) {

                StudyAbroadVisaDocument::create([
                    'visa_guide_id' => $guideId,
                    'document_name' => $document,
                    'description' => null,
                    'is_required' => 1,
                    'sort_order' => $index + 1,
                    'status' => 1,
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | FAQS
            |--------------------------------------------------------------------------
            */

            StudyAbroadVisaFaq::where(
                'visa_guide_id',
                $guideId
            )->delete();

            foreach ($data['faqs'] as $index => $faq) {

                StudyAbroadVisaFaq::create([
                    'visa_guide_id' => $guideId,
                    'question' => $faq['question'],
                    'answer' => $faq['answer'],
                    'sort_order' => $index + 1,
                    'status' => 1,
                ]);
            }
        }
    }
}