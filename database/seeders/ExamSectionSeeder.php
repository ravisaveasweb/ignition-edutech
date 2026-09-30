<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\ExamSection;
use Illuminate\Database\Seeder;

class ExamSectionSeeder extends Seeder
{
    public function run(): void
    {
        $exams = Exam::all();

        foreach ($exams as $exam) {

            /*
            |--------------------------------------------------------------------------
            | IELTS
            |--------------------------------------------------------------------------
            */

            if ($exam->slug === 'ielts') {

                $sections = [

                    [
                        'section_type' => 'overview',
                        'title' => 'Overview',
                        'content' => '
                            <p>
                                IELTS stands for International English Language Testing System.
                                It is an English language proficiency test used by educational
                                institutions, employers, professional organisations and
                                immigration authorities around the world.
                            </p>

                            <p>
                                IELTS has two main test types: IELTS Academic and IELTS General
                                Training. IELTS Academic is commonly used for higher education
                                and professional registration, while IELTS General Training is
                                commonly used for migration, work and training purposes.
                            </p>

                            <h3>IELTS Test Sections</h3>

                            <ul>
                                <li>Listening</li>
                                <li>Reading</li>
                                <li>Writing</li>
                                <li>Speaking</li>
                            </ul>

                            <p>
                                The IELTS Academic test takes approximately 2 hours and
                                45 minutes. Listening, Reading and Writing are completed
                                in one sitting, while Speaking may be scheduled separately.
                            </p>
                        ',
                        'sort_order' => 1,
                    ],

                    [
                        'section_type' => 'eligibility',
                        'title' => 'Eligibility Criteria',
                        'content' => '
                            <p>
                                IELTS generally does not require a specific educational
                                qualification. Candidates take IELTS for education,
                                employment, professional registration and migration purposes.
                            </p>

                            <h3>Who Can Take IELTS?</h3>

                            <ul>
                                <li>Students planning to study abroad.</li>
                                <li>Professionals applying for employment or registration.</li>
                                <li>People applying for migration.</li>
                                <li>Applicants who need evidence of English proficiency.</li>
                            </ul>

                            <p>
                                Specific score and test-type requirements are determined by
                                the university, employer, professional body or immigration
                                authority.
                            </p>
                        ',
                        'sort_order' => 2,
                    ],

                    [
                        'section_type' => 'application',
                        'title' => 'Application Process',
                        'content' => '
                            <p>
                                Candidates can register for IELTS through an official IELTS
                                test centre or authorised booking platform.
                            </p>

                            <h3>Registration Process</h3>

                            <ol>
                                <li>Select IELTS Academic or IELTS General Training.</li>
                                <li>Choose a test centre or available delivery method.</li>
                                <li>Select an available test date.</li>
                                <li>Provide personal information.</li>
                                <li>Provide the required identification document.</li>
                                <li>Complete payment.</li>
                                <li>Receive the booking confirmation.</li>
                            </ol>
                        ',
                        'sort_order' => 3,
                    ],

                    [
                        'section_type' => 'pattern',
                        'title' => 'Exam Pattern',
                        'content' => '
                            <p>
                                IELTS consists of four sections: Listening, Reading,
                                Writing and Speaking.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th>Duration</th>
                                        <th>Format</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Listening</td>
                                        <td>Approximately 30 mins </td>
                                        <td>4 parts, 40 questions</td>
                                    </tr>
                                    <tr>
                                        <td>Reading</td>
                                        <td>60 minutes</td>
                                        <td>3 sections</td>
                                    </tr>
                                    <tr>
                                        <td>Writing</td>
                                        <td>60 minutes</td>
                                        <td>2 tasks</td>
                                    </tr>
                                    <tr>
                                        <td>Speaking</td>
                                        <td>11–14 minutes</td>
                                        <td>3 parts</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                Listening and Speaking are the same for Academic and General
                                Training, while Reading and Writing differ.
                            </p>
                        ',
                        'sort_order' => 4,
                    ],

                    [
                        'section_type' => 'syllabus',
                        'title' => 'Syllabus',
                        'content' => '
                            <p>
                                IELTS does not have a traditional subject-based syllabus.
                                It evaluates practical English language skills.
                            </p>

                            <h3>Listening</h3>
                            <ul>
                                <li>Understanding main ideas.</li>
                                <li>Identifying specific information.</li>
                                <li>Understanding opinions and attitudes.</li>
                                <li>Following discussions and arguments.</li>
                            </ul>

                            <h3>Reading</h3>
                            <ul>
                                <li>Understanding main ideas.</li>
                                <li>Finding specific information.</li>
                                <li>Understanding arguments.</li>
                                <li>Identifying opinions and claims.</li>
                            </ul>

                            <h3>Writing</h3>
                            <ul>
                                <li>Task response.</li>
                                <li>Coherence and cohesion.</li>
                                <li>Lexical resource.</li>
                                <li>Grammar and accuracy.</li>
                            </ul>

                            <h3>Speaking</h3>
                            <ul>
                                <li>Fluency and coherence.</li>
                                <li>Lexical resource.</li>
                                <li>Grammar.</li>
                                <li>Pronunciation.</li>
                            </ul>
                        ',
                        'sort_order' => 5,
                    ],

                    [
                        'section_type' => 'fees',
                        'title' => 'Exam Fees',
                        'content' => '
                            <p>
                                IELTS fees vary depending on the test type, test centre,
                                location and delivery method.
                            </p>

                            <p>
                                Candidates should check the current fee displayed by their
                                selected official IELTS test centre before registration.
                            </p>

                            <div class="exam-fee-box">
                                <strong>Important:</strong>
                                IELTS fees can change, so always verify the current fee
                                before booking.
                            </div>
                        ',
                        'sort_order' => 6,
                    ],

                    [
                        'section_type' => 'dates',
                        'title' => 'Important Dates',
                        'content' => '
                            <p>
                                IELTS does not have one single annual examination date.
                                Test dates are offered throughout the year depending on
                                the test centre and delivery method.
                            </p>

                            <h3>Important Dates to Check</h3>

                            <ul>
                                <li>Registration deadline</li>
                                <li>Test date</li>
                                <li>Speaking test date</li>
                                <li>Result availability date</li>
                                <li>One Skill Retake availability, where applicable</li>
                            </ul>
                        ',
                        'sort_order' => 7,
                    ],

                    [
                        'section_type' => 'documents',
                        'title' => 'Documents Required',
                        'content' => '
                            <p>
                                Candidates must provide acceptable identification when
                                registering and taking IELTS.
                            </p>

                            <ul>
                                <li>Valid identification document as specified during registration.</li>
                                <li>Booking confirmation and test information.</li>
                            </ul>

                            <p>
                                Exact identification requirements can vary by country
                                and test type.
                            </p>
                        ',
                        'sort_order' => 8,
                    ],

                    [
                        'section_type' => 'preparation',
                        'title' => 'Preparation Strategy',
                        'content' => '
                            <p>
                                IELTS preparation should develop Listening, Reading,
                                Writing and Speaking skills.
                            </p>

                            <h3>Listening</h3>
                            <ul>
                                <li>Practise different English accents.</li>
                                <li>Use official practice materials.</li>
                                <li>Practise identifying keywords.</li>
                            </ul>

                            <h3>Reading</h3>
                            <ul>
                                <li>Practise skimming and scanning.</li>
                                <li>Improve vocabulary.</li>
                                <li>Practise under timed conditions.</li>
                            </ul>

                            <h3>Writing</h3>
                            <ul>
                                <li>Understand both writing tasks.</li>
                                <li>Organise ideas logically.</li>
                                <li>Improve grammar and vocabulary.</li>
                            </ul>

                            <h3>Speaking</h3>
                            <ul>
                                <li>Practise speaking regularly.</li>
                                <li>Record practice answers.</li>
                                <li>Improve fluency and pronunciation.</li>
                            </ul>
                        ',
                        'sort_order' => 9,
                    ],

                    [
                        'section_type' => 'results',
                        'title' => 'Results',
                        'content' => '
                            <p>
                                IELTS results include individual scores for Listening,
                                Reading, Writing and Speaking together with an overall
                                band score.
                            </p>

                            <p>
                                Result availability depends on the test delivery method
                                and test centre.
                            </p>

                            <p>
                                IELTS recommends that organisations consider results valid
                                for two years, although organisations can set their own
                                requirements.
                            </p>
                        ',
                        'sort_order' => 10,
                    ],

                    [
                        'section_type' => 'scores',
                        'title' => 'Score Requirements',
                        'content' => '
                            <p>
                                IELTS uses a 9-band scoring system. Candidates receive
                                individual scores for Listening, Reading, Writing and Speaking.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Band</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr><td>9</td><td>Expert User</td></tr>
                                    <tr><td>8</td><td>Very Good User</td></tr>
                                    <tr><td>7</td><td>Good User</td></tr>
                                    <tr><td>6</td><td>Competent User</td></tr>
                                    <tr><td>5</td><td>Modest User</td></tr>
                                    <tr><td>4</td><td>Limited User</td></tr>
                                    <tr><td>3</td><td>Extremely Limited User</td></tr>
                                    <tr><td>2</td><td>Intermittent User</td></tr>
                                    <tr><td>1</td><td>Non-User</td></tr>
                                    <tr><td>0</td><td>Did not attempt the test</td></tr>
                                </tbody>
                            </table>

                            <p>
                                There is no universal IELTS pass or fail score.
                                Universities and organisations set their own requirements.
                            </p>
                        ',
                        'sort_order' => 11,
                    ],

                    [
                        'section_type' => 'universities',
                        'title' => 'Universities and Countries',
                        'content' => '
                            <p>
                                IELTS is accepted by thousands of organisations worldwide,
                                including universities, professional bodies, employers
                                and immigration authorities.
                            </p>

                            <h3>Popular Study Destinations</h3>

                            <ul>
                                <li>Australia</li>
                                <li>Canada</li>
                                <li>United Kingdom</li>
                                <li>United States</li>
                                <li>New Zealand</li>
                                <li>Ireland</li>
                                <li>Germany and other European destinations</li>
                            </ul>

                            <p>
                                Acceptance and minimum score requirements vary by institution
                                and programme.
                            </p>
                        ',
                        'sort_order' => 12,
                    ],

                    [
                        'section_type' => 'faq',
                        'title' => 'Frequently Asked Questions',
                        'content' => '
                            <div class="faq-item">
                                <div class="faq-question">What is IELTS?</div>
                                <p>
                                    IELTS is an English language proficiency test that
                                    assesses Listening, Reading, Writing and Speaking.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">What is the IELTS score range?</div>
                                <p>IELTS uses a band scale from 0 to 9.</p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">Is there a pass or fail in IELTS?</div>
                                <p>
                                    There is no universal pass or fail mark.
                                    Institutions establish their own requirements.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">How long are IELTS results valid?</div>
                                <p>
                                    IELTS recommends considering results valid for two years,
                                    although organisations may have their own policies.
                                </p>
                            </div>
                        ',
                        'sort_order' => 13,
                    ],
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | PTE
            |--------------------------------------------------------------------------
            */

            elseif ($exam->slug === 'pte') {

                $sections = [

                    [
                        'section_type' => 'overview',
                        'title' => 'Overview',
                        'content' => '
                            <p>
                                PTE Academic is a computer-based English language
                                proficiency test developed by Pearson.
                            </p>

                            <p>
                                It assesses English communication skills through
                                Speaking and Writing, Reading and Listening.
                            </p>

                            <h3>PTE Academic Sections</h3>

                            <ul>
                                <li>Speaking & Writing</li>
                                <li>Reading</li>
                                <li>Listening</li>
                            </ul>
                        ',
                        'sort_order' => 1,
                    ],

                    [
                        'section_type' => 'eligibility',
                        'title' => 'Eligibility Criteria',
                        'content' => '
                            <p>
                                PTE Academic is taken by candidates who need to
                                demonstrate English proficiency for purposes such
                                as international study and other approved uses.
                            </p>

                            <ul>
                                <li>Students applying to universities abroad.</li>
                                <li>Applicants requiring English proficiency evidence.</li>
                                <li>Candidates applying for eligible migration or visa purposes.</li>
                            </ul>

                            <p>
                                The exact requirements depend on the institution,
                                programme or authority receiving the score.
                            </p>
                        ',
                        'sort_order' => 2,
                    ],

                    [
                        'section_type' => 'application',
                        'title' => 'Application Process',
                        'content' => '
                            <ol>
                                <li>Create or access your Pearson PTE account.</li>
                                <li>Select the appropriate PTE test.</li>
                                <li>Choose an available test centre and date.</li>
                                <li>Enter your personal information.</li>
                                <li>Provide the required identification information.</li>
                                <li>Pay the applicable test fee.</li>
                                <li>Receive your booking confirmation.</li>
                            </ol>

                            <p>
                                Candidates should ensure that registration information
                                matches their identification documents.
                            </p>
                        ',
                        'sort_order' => 3,
                    ],

                    [
                        'section_type' => 'pattern',
                        'title' => 'Exam Pattern',
                        'content' => '
                            <p>
                                PTE Academic currently consists of three parts.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Part</th>
                                        <th>Duration</th>
                                        <th>Skills</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Speaking & Writing</td>
                                        <td>76–84 minutes</td>
                                        <td>Speaking and Writing</td>
                                    </tr>
                                    <tr>
                                        <td>Reading</td>
                                        <td>23–30 minutes</td>
                                        <td>Reading</td>
                                    </tr>
                                    <tr>
                                        <td>Listening</td>
                                        <td>31–39 minutes</td>
                                        <td>Listening</td>
                                    </tr>
                                </tbody>
                            </table>
                        ',
                        'sort_order' => 4,
                    ],

                    [
                        'section_type' => 'syllabus',
                        'title' => 'Syllabus',
                        'content' => '
                            <h3>Speaking & Writing</h3>
                            <ul>
                                <li>Oral communication.</li>
                                <li>Pronunciation and fluency.</li>
                                <li>Written communication.</li>
                                <li>Grammar and vocabulary.</li>
                            </ul>

                            <h3>Reading</h3>
                            <ul>
                                <li>Reading comprehension.</li>
                                <li>Understanding information.</li>
                                <li>Vocabulary and grammar.</li>
                            </ul>

                            <h3>Listening</h3>
                            <ul>
                                <li>Understanding spoken English.</li>
                                <li>Identifying important information.</li>
                                <li>Summarising and interpreting audio content.</li>
                            </ul>
                        ',
                        'sort_order' => 5,
                    ],

                    [
                        'section_type' => 'fees',
                        'title' => 'Exam Fees',
                        'content' => '
                            <p>
                                PTE fees depend on the country, test type and
                                booking location.
                            </p>

                            <p>
                                Candidates should check the official Pearson PTE
                                booking page for the current fee before registration.
                            </p>
                        ',
                        'sort_order' => 6,
                    ],

                    [
                        'section_type' => 'dates',
                        'title' => 'Important Dates',
                        'content' => '
                            <p>
                                PTE test dates are offered throughout the year
                                depending on test-centre availability.
                            </p>

                            <ul>
                                <li>Registration date</li>
                                <li>Test date</li>
                                <li>Score availability</li>
                                <li>Score sending deadline</li>
                            </ul>
                        ',
                        'sort_order' => 7,
                    ],

                    [
                        'section_type' => 'documents',
                        'title' => 'Documents Required',
                        'content' => '
                            <p>
                                Candidates must provide acceptable identification
                                according to Pearson requirements.
                            </p>

                            <ul>
                                <li>Valid identification document.</li>
                                <li>Booking information.</li>
                                <li>Any additional documents required by the test centre.</li>
                            </ul>
                        ',
                        'sort_order' => 8,
                    ],

                    [
                        'section_type' => 'preparation',
                        'title' => 'Preparation Strategy',
                        'content' => '
                            <h3>Speaking & Writing</h3>
                            <ul>
                                <li>Practise speaking fluently.</li>
                                <li>Improve pronunciation.</li>
                                <li>Practise written responses.</li>
                            </ul>

                            <h3>Reading</h3>
                            <ul>
                                <li>Practise reading quickly.</li>
                                <li>Improve vocabulary.</li>
                                <li>Work on comprehension.</li>
                            </ul>

                            <h3>Listening</h3>
                            <ul>
                                <li>Practise note-taking.</li>
                                <li>Listen to academic English.</li>
                                <li>Practise identifying key information.</li>
                            </ul>
                        ',
                        'sort_order' => 9,
                    ],

                    [
                        'section_type' => 'results',
                        'title' => 'Results',
                        'content' => '
                            <p>
                                PTE Academic provides an overall score and a
                                breakdown of performance by skill.
                            </p>

                            <p>
                                Pearson currently states that results are typically
                                available within 48 hours.
                            </p>
                        ',
                        'sort_order' => 10,
                    ],

                    [
                        'section_type' => 'scores',
                        'title' => 'Score Requirements',
                        'content' => '
                            <p>
                                PTE Academic uses a 10–90 scoring scale.
                            </p>

                            <ul>
                                <li>Overall Score</li>
                                <li>Listening</li>
                                <li>Reading</li>
                                <li>Speaking</li>
                                <li>Writing</li>
                            </ul>

                            <p>
                                Universities and organisations set their own
                                required PTE scores.
                            </p>
                        ',
                        'sort_order' => 11,
                    ],

                    [
                        'section_type' => 'universities',
                        'title' => 'Universities and Countries',
                        'content' => '
                            <p>
                                PTE Academic is used by universities and other
                                organisations in many countries.
                            </p>

                            <ul>
                                <li>Australia</li>
                                <li>Canada</li>
                                <li>United Kingdom</li>
                                <li>United States</li>
                                <li>New Zealand</li>
                                <li>Ireland</li>
                            </ul>

                            <p>
                                Students should confirm that their selected
                                university and programme accepts PTE Academic.
                            </p>
                        ',
                        'sort_order' => 12,
                    ],

                    [
                        'section_type' => 'faq',
                        'title' => 'Frequently Asked Questions',
                        'content' => '
                            <div class="faq-item">
                                <div class="faq-question">What is PTE?</div>
                                <p>
                                    PTE Academic is a computer-based English
                                    language proficiency test by Pearson.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">What is the PTE score range?</div>
                                <p>PTE Academic uses a 10–90 scale.</p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">How quickly are PTE results available?</div>
                                <p>
                                    Pearson states that results are typically
                                    available within 48 hours.
                                </p>
                            </div>
                        ',
                        'sort_order' => 13,
                    ],
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | TOEFL
            |--------------------------------------------------------------------------
            */

            elseif ($exam->slug === 'toefl') {

                $sections = [

                    [
                        'section_type' => 'overview',
                        'title' => 'Overview',
                        'content' => '
                            <p>
                                TOEFL stands for Test of English as a Foreign Language.
                                TOEFL iBT measures English reading, listening, speaking
                                and writing skills in academic contexts.
                            </p>

                            <h3>TOEFL Sections</h3>

                            <ul>
                                <li>Reading</li>
                                <li>Listening</li>
                                <li>Speaking</li>
                                <li>Writing</li>
                            </ul>

                            <p>
                                The current TOEFL iBT experience was updated in January
                                2026 and uses an adaptive test design.
                            </p>
                        ',
                        'sort_order' => 1,
                    ],

                    [
                        'section_type' => 'eligibility',
                        'title' => 'Eligibility Criteria',
                        'content' => '
                            <p>
                                TOEFL does not generally require a specific educational
                                qualification simply to take the test.
                            </p>

                            <p>
                                Students commonly take TOEFL when applying to universities
                                or programmes that require proof of English proficiency.
                            </p>

                            <p>
                                Each institution determines its own English-language
                                requirements.
                            </p>
                        ',
                        'sort_order' => 2,
                    ],

                    [
                        'section_type' => 'application',
                        'title' => 'Application Process',
                        'content' => '
                            <ol>
                                <li>Create or access an ETS account.</li>
                                <li>Select TOEFL iBT.</li>
                                <li>Choose a test centre or Home Edition where available.</li>
                                <li>Select a test date.</li>
                                <li>Enter personal information.</li>
                                <li>Provide required identification information.</li>
                                <li>Pay the applicable registration fee.</li>
                                <li>Receive confirmation of the appointment.</li>
                            </ol>
                        ',
                        'sort_order' => 3,
                    ],

                    [
                        'section_type' => 'pattern',
                        'title' => 'Exam Pattern',
                        'content' => '
                            <p>
                                The updated TOEFL iBT takes approximately two hours,
                                although exact time and item counts can vary because
                                the test adapts.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th>Approx. Base Time</th>
                                        <th>Current Tasks</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Reading</td>
                                        <td>30 minutes</td>
                                        <td>Complete the Words, Read in Daily Life, Read an Academic Passage</td>
                                    </tr>
                                    <tr>
                                        <td>Listening</td>
                                        <td>29 minutes</td>
                                        <td>Responses, Conversations, Announcements and Academic Talks</td>
                                    </tr>
                                    <tr>
                                        <td>Writing</td>
                                        <td>23 minutes</td>
                                        <td>Build a Sentence, Write an Email, Academic Discussion</td>
                                    </tr>
                                    <tr>
                                        <td>Speaking</td>
                                        <td>8 minutes</td>
                                        <td>Listen and Repeat, Take an Interview</td>
                                    </tr>
                                </tbody>
                            </table>
                        ',
                        'sort_order' => 4,
                    ],

                    [
                        'section_type' => 'syllabus',
                        'title' => 'Syllabus',
                        'content' => '
                            <h3>Reading</h3>
                            <ul>
                                <li>Vocabulary and comprehension.</li>
                                <li>Understanding information from academic and daily-life texts.</li>
                                <li>Identifying main ideas and details.</li>
                            </ul>

                            <h3>Listening</h3>
                            <ul>
                                <li>Understanding conversations.</li>
                                <li>Understanding announcements.</li>
                                <li>Understanding academic talks.</li>
                            </ul>

                            <h3>Speaking</h3>
                            <ul>
                                <li>Listening and repeating accurately.</li>
                                <li>Responding appropriately in an interview.</li>
                            </ul>

                            <h3>Writing</h3>
                            <ul>
                                <li>Building grammatically correct sentences.</li>
                                <li>Writing emails.</li>
                                <li>Participating in academic discussions.</li>
                            </ul>
                        ',
                        'sort_order' => 5,
                    ],

                    [
                        'section_type' => 'fees',
                        'title' => 'Exam Fees',
                        'content' => '
                            <p>
                                TOEFL registration fees vary depending on the country,
                                test location and other registration conditions.
                            </p>

                            <p>
                                Candidates should check the official ETS registration
                                page for the current fee applicable to their location.
                            </p>
                        ',
                        'sort_order' => 6,
                    ],

                    [
                        'section_type' => 'dates',
                        'title' => 'Important Dates',
                        'content' => '
                            <p>
                                TOEFL test dates are available throughout the year,
                                depending on test-centre and Home Edition availability.
                            </p>

                            <ul>
                                <li>Registration deadline</li>
                                <li>Test appointment</li>
                                <li>Score availability</li>
                                <li>University application deadlines</li>
                            </ul>
                        ',
                        'sort_order' => 7,
                    ],

                    [
                        'section_type' => 'documents',
                        'title' => 'Documents Required',
                        'content' => '
                            <p>
                                Candidates must meet ETS identification requirements
                                when registering and taking TOEFL.
                            </p>

                            <ul>
                                <li>Valid acceptable identification.</li>
                                <li>ETS account and appointment information.</li>
                                <li>Additional documents where specifically required.</li>
                            </ul>
                        ',
                        'sort_order' => 8,
                    ],

                    [
                        'section_type' => 'preparation',
                        'title' => 'Preparation Strategy',
                        'content' => '
                            <h3>Reading</h3>
                            <ul>
                                <li>Practise academic and everyday reading.</li>
                                <li>Improve vocabulary.</li>
                                <li>Practise identifying key information.</li>
                            </ul>

                            <h3>Listening</h3>
                            <ul>
                                <li>Practise academic conversations and talks.</li>
                                <li>Take notes while listening.</li>
                            </ul>

                            <h3>Speaking</h3>
                            <ul>
                                <li>Practise speaking clearly.</li>
                                <li>Work on pronunciation and response speed.</li>
                            </ul>

                            <h3>Writing</h3>
                            <ul>
                                <li>Practise sentence construction.</li>
                                <li>Write concise emails.</li>
                                <li>Practise academic discussion responses.</li>
                            </ul>
                        ',
                        'sort_order' => 9,
                    ],

                    [
                        'section_type' => 'results',
                        'title' => 'Results',
                        'content' => '
                            <p>
                                TOEFL iBT scores are available in the ETS account
                                after the test. ETS currently states that scores
                                are available three days after the test date.
                            </p>

                            <p>
                                TOEFL scores are valid for two years after the
                                test date.
                            </p>
                        ',
                        'sort_order' => 10,
                    ],

                    [
                        'section_type' => 'scores',
                        'title' => 'Score Requirements',
                        'content' => '
                            <p>
                                Since January 21, 2026, TOEFL iBT reports scores
                                on a 1–6 scale in half-point increments.
                            </p>

                            <p>
                                During the two-year transition period, candidates
                                also receive a comparable overall score on the
                                previous 0–120 scale.
                            </p>

                            <p>
                                Universities establish their own TOEFL score requirements.
                            </p>
                        ',
                        'sort_order' => 11,
                    ],

                    [
                        'section_type' => 'universities',
                        'title' => 'Universities and Countries',
                        'content' => '
                            <p>
                                TOEFL iBT is used by universities and institutions
                                around the world for English-language proficiency
                                assessment.
                            </p>

                            <ul>
                                <li>United States</li>
                                <li>Canada</li>
                                <li>United Kingdom</li>
                                <li>Australia</li>
                                <li>New Zealand</li>
                                <li>Ireland</li>
                                <li>European destinations</li>
                            </ul>

                            <p>
                                Students should check the current TOEFL requirements
                                of their selected institution.
                            </p>
                        ',
                        'sort_order' => 12,
                    ],

                    [
                        'section_type' => 'faq',
                        'title' => 'Frequently Asked Questions',
                        'content' => '
                            <div class="faq-item">
                                <div class="faq-question">What is TOEFL?</div>
                                <p>
                                    TOEFL iBT is an English proficiency test that
                                    measures reading, listening, speaking and writing.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">What is the current TOEFL score scale?</div>
                                <p>
                                    Since January 2026, TOEFL reports scores on a
                                    1–6 scale in half-point increments.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">How long are TOEFL scores valid?</div>
                                <p>TOEFL scores are valid for two years.</p>
                            </div>
                        ',
                        'sort_order' => 13,
                    ],
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | GRE
            |--------------------------------------------------------------------------
            */

            elseif ($exam->slug === 'gre') {

                $sections = [

                    [
                        'section_type' => 'overview',
                        'title' => 'Overview',
                        'content' => '
                            <p>
                                The GRE General Test is a graduate-level admission
                                test developed by ETS.
                            </p>

                            <p>
                                It measures Verbal Reasoning, Quantitative Reasoning
                                and Analytical Writing skills.
                            </p>

                            <h3>GRE Sections</h3>

                            <ul>
                                <li>Analytical Writing</li>
                                <li>Verbal Reasoning</li>
                                <li>Quantitative Reasoning</li>
                            </ul>
                        ',
                        'sort_order' => 1,
                    ],

                    [
                        'section_type' => 'eligibility',
                        'title' => 'Eligibility Criteria',
                        'content' => '
                            <p>
                                GRE is commonly taken by students applying to
                                graduate, business and law programmes.
                            </p>

                            <p>
                                Universities and programmes determine whether a GRE
                                score is required or accepted as part of admission.
                            </p>
                        ',
                        'sort_order' => 2,
                    ],

                    [
                        'section_type' => 'application',
                        'title' => 'Application Process',
                        'content' => '
                            <ol>
                                <li>Create or access an ETS account.</li>
                                <li>Select the GRE General Test.</li>
                                <li>Choose a test location and date.</li>
                                <li>Enter personal information.</li>
                                <li>Provide required identification information.</li>
                                <li>Pay the applicable registration fee.</li>
                                <li>Receive test appointment confirmation.</li>
                            </ol>
                        ',
                        'sort_order' => 3,
                    ],

                    [
                        'section_type' => 'pattern',
                        'title' => 'Exam Pattern',
                        'content' => '
                            <p>
                                The GRE General Test contains Analytical Writing,
                                Verbal Reasoning and Quantitative Reasoning.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th>Structure</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Analytical Writing</td>
                                        <td>1 Analyze an Issue task</td>
                                        <td>30 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Verbal Reasoning</td>
                                        <td>2 sections</td>
                                        <td>18 + 23 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Reasoning</td>
                                        <td>2 sections</td>
                                        <td>21 + 26 minutes</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                The Verbal and Quantitative sections are section-level adaptive.
                            </p>
                        ',
                        'sort_order' => 4,
                    ],

                    [
                        'section_type' => 'syllabus',
                        'title' => 'Syllabus',
                        'content' => '
                            <h3>Verbal Reasoning</h3>
                            <ul>
                                <li>Reading comprehension.</li>
                                <li>Text completion.</li>
                                <li>Sentence equivalence.</li>
                                <li>Vocabulary and reasoning.</li>
                            </ul>

                            <h3>Quantitative Reasoning</h3>
                            <ul>
                                <li>Arithmetic.</li>
                                <li>Algebra.</li>
                                <li>Geometry.</li>
                                <li>Data analysis.</li>
                            </ul>

                            <h3>Analytical Writing</h3>
                            <ul>
                                <li>Developing an argument.</li>
                                <li>Organising ideas.</li>
                                <li>Supporting claims with reasoning.</li>
                                <li>Clear and effective writing.</li>
                            </ul>
                        ',
                        'sort_order' => 5,
                    ],

                    [
                        'section_type' => 'fees',
                        'title' => 'Exam Fees',
                        'content' => '
                            <p>
                                GRE registration fees vary by location and other
                                applicable registration conditions.
                            </p>

                            <p>
                                Candidates should check the official ETS registration
                                page for the current fee.
                            </p>
                        ',
                        'sort_order' => 6,
                    ],

                    [
                        'section_type' => 'dates',
                        'title' => 'Important Dates',
                        'content' => '
                            <p>
                                GRE General Test appointments are available throughout
                                the year depending on test-centre and delivery availability.
                            </p>

                            <ul>
                                <li>Registration deadline</li>
                                <li>Test date</li>
                                <li>Score availability</li>
                                <li>University application deadline</li>
                            </ul>
                        ',
                        'sort_order' => 7,
                    ],

                    [
                        'section_type' => 'documents',
                        'title' => 'Documents Required',
                        'content' => '
                            <p>
                                Candidates must meet ETS identification requirements
                                when registering for and taking the GRE.
                            </p>

                            <ul>
                                <li>Acceptable identification document.</li>
                                <li>ETS registration information.</li>
                                <li>Additional documents if required.</li>
                            </ul>
                        ',
                        'sort_order' => 8,
                    ],

                    [
                        'section_type' => 'preparation',
                        'title' => 'Preparation Strategy',
                        'content' => '
                            <h3>Verbal Reasoning</h3>
                            <ul>
                                <li>Build academic vocabulary.</li>
                                <li>Practise reading comprehension.</li>
                                <li>Practise text completion and sentence equivalence.</li>
                            </ul>

                            <h3>Quantitative Reasoning</h3>
                            <ul>
                                <li>Review arithmetic and algebra.</li>
                                <li>Practise data analysis.</li>
                                <li>Use timed practice.</li>
                            </ul>

                            <h3>Analytical Writing</h3>
                            <ul>
                                <li>Practise organising arguments.</li>
                                <li>Develop clear explanations.</li>
                                <li>Review sample responses and scoring criteria.</li>
                            </ul>
                        ',
                        'sort_order' => 9,
                    ],

                    [
                        'section_type' => 'results',
                        'title' => 'Results',
                        'content' => '
                            <p>
                                Official GRE General Test scores are currently
                                available in the ETS account approximately
                                8–10 days after the test date.
                            </p>

                            <p>
                                GRE scores are reportable for five years following
                                the test date.
                            </p>
                        ',
                        'sort_order' => 10,
                    ],

                    [
                        'section_type' => 'scores',
                        'title' => 'Score Requirements',
                        'content' => '
                            <p>
                                GRE General Test reports three scores:
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Measure</th>
                                        <th>Score Scale</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Verbal Reasoning</td>
                                        <td>130–170</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Reasoning</td>
                                        <td>130–170</td>
                                    </tr>
                                    <tr>
                                        <td>Analytical Writing</td>
                                        <td>0–6</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                Graduate programmes establish their own GRE
                                score requirements.
                            </p>
                        ',
                        'sort_order' => 11,
                    ],

                    [
                        'section_type' => 'universities',
                        'title' => 'Universities and Countries',
                        'content' => '
                            <p>
                                GRE scores are accepted by thousands of graduate,
                                business and law schools worldwide.
                            </p>

                            <ul>
                                <li>United States</li>
                                <li>Canada</li>
                                <li>United Kingdom</li>
                                <li>Australia</li>
                                <li>Europe</li>
                                <li>Other international destinations</li>
                            </ul>

                            <p>
                                Acceptance and score requirements vary by programme
                                and institution.
                            </p>
                        ',
                        'sort_order' => 12,
                    ],

                    [
                        'section_type' => 'faq',
                        'title' => 'Frequently Asked Questions',
                        'content' => '
                            <div class="faq-item">
                                <div class="faq-question">What is GRE?</div>
                                <p>
                                    GRE is a graduate-level admission test developed
                                    by ETS.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">What are the GRE scores?</div>
                                <p>
                                    Verbal and Quantitative scores range from 130–170,
                                    while Analytical Writing is scored from 0–6.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">How long are GRE scores reportable?</div>
                                <p>
                                    GRE scores are reportable for five years after
                                    the test date.
                                </p>
                            </div>
                        ',
                        'sort_order' => 13,
                    ],
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | GMAT
            |--------------------------------------------------------------------------
            */

            elseif ($exam->slug === 'gmat') {

                $sections = [

                    [
                        'section_type' => 'overview',
                        'title' => 'Overview',
                        'content' => '
                            <p>
                                The GMAT exam is a graduate management admission
                                test designed for business school applicants.
                            </p>

                            <p>
                                The current GMAT exam evaluates Quantitative Reasoning,
                                Verbal Reasoning and Data Insights.
                            </p>

                            <h3>GMAT Sections</h3>

                            <ul>
                                <li>Quantitative Reasoning</li>
                                <li>Verbal Reasoning</li>
                                <li>Data Insights</li>
                            </ul>
                        ',
                        'sort_order' => 1,
                    ],

                    [
                        'section_type' => 'eligibility',
                        'title' => 'Eligibility Criteria',
                        'content' => '
                            <p>
                                GMAT is designed primarily for applicants to graduate
                                management and business programmes.
                            </p>

                            <p>
                                Business schools decide whether they require or accept
                                GMAT scores for their programmes.
                            </p>

                            <ul>
                                <li>MBA applicants.</li>
                                <li>Business master programme applicants.</li>
                                <li>Other graduate management applicants.</li>
                            </ul>
                        ',
                        'sort_order' => 2,
                    ],

                    [
                        'section_type' => 'application',
                        'title' => 'Application Process',
                        'content' => '
                            <ol>
                                <li>Create or access your mba.com account.</li>
                                <li>Choose the GMAT exam.</li>
                                <li>Select a test centre or online option where available.</li>
                                <li>Select a test date.</li>
                                <li>Provide personal information.</li>
                                <li>Complete payment.</li>
                                <li>Receive your appointment confirmation.</li>
                            </ol>
                        ',
                        'sort_order' => 3,
                    ],

                    [
                        'section_type' => 'pattern',
                        'title' => 'Exam Pattern',
                        'content' => '
                            <p>
                                The GMAT exam has three sections. Each section is
                                45 minutes long.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Section</th>
                                        <th>Questions</th>
                                        <th>Duration</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Quantitative Reasoning</td>
                                        <td>21</td>
                                        <td>45 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Verbal Reasoning</td>
                                        <td>23</td>
                                        <td>45 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Data Insights</td>
                                        <td>20</td>
                                        <td>45 minutes</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                The total testing time is 2 hours and 15 minutes,
                                with one optional 10-minute break.
                            </p>
                        ',
                        'sort_order' => 4,
                    ],

                    [
                        'section_type' => 'syllabus',
                        'title' => 'Syllabus',
                        'content' => '
                            <h3>Quantitative Reasoning</h3>
                            <ul>
                                <li>Problem solving.</li>
                                <li>Arithmetic.</li>
                                <li>Algebra.</li>
                                <li>Quantitative reasoning.</li>
                            </ul>

                            <h3>Verbal Reasoning</h3>
                            <ul>
                                <li>Reading comprehension.</li>
                                <li>Critical reasoning.</li>
                                <li>Understanding written information.</li>
                            </ul>

                            <h3>Data Insights</h3>
                            <ul>
                                <li>Data analysis.</li>
                                <li>Data interpretation.</li>
                                <li>Logical reasoning with information.</li>
                            </ul>
                        ',
                        'sort_order' => 5,
                    ],

                    [
                        'section_type' => 'fees',
                        'title' => 'Exam Fees',
                        'content' => '
                            <p>
                                GMAT fees depend on the country, test delivery
                                method and registration conditions.
                            </p>

                            <p>
                                Candidates should check mba.com for the current
                                fee applicable to their selected test option.
                            </p>
                        ',
                        'sort_order' => 6,
                    ],

                    [
                        'section_type' => 'dates',
                        'title' => 'Important Dates',
                        'content' => '
                            <p>
                                GMAT appointments are available throughout the year
                                depending on test-centre and online availability.
                            </p>

                            <ul>
                                <li>Registration date</li>
                                <li>Test date</li>
                                <li>Score availability</li>
                                <li>Business school application deadline</li>
                            </ul>
                        ',
                        'sort_order' => 7,
                    ],

                    [
                        'section_type' => 'documents',
                        'title' => 'Documents Required',
                        'content' => '
                            <p>
                                Candidates must follow GMAT identification requirements
                                when registering and taking the exam.
                            </p>

                            <ul>
                                <li>Valid acceptable identification.</li>
                                <li>GMAT registration information.</li>
                                <li>Additional documents if required.</li>
                            </ul>
                        ',
                        'sort_order' => 8,
                    ],

                    [
                        'section_type' => 'preparation',
                        'title' => 'Preparation Strategy',
                        'content' => '
                            <h3>Quantitative Reasoning</h3>
                            <ul>
                                <li>Review arithmetic and algebra.</li>
                                <li>Practise problem solving.</li>
                                <li>Use timed practice.</li>
                            </ul>

                            <h3>Verbal Reasoning</h3>
                            <ul>
                                <li>Practise reading comprehension.</li>
                                <li>Develop critical reasoning skills.</li>
                                <li>Practise analysing arguments.</li>
                            </ul>

                            <h3>Data Insights</h3>
                            <ul>
                                <li>Practise interpreting tables and charts.</li>
                                <li>Develop data analysis skills.</li>
                                <li>Practise reasoning with multiple sources of information.</li>
                            </ul>
                        ',
                        'sort_order' => 9,
                    ],

                    [
                        'section_type' => 'results',
                        'title' => 'Results',
                        'content' => '
                            <p>
                                GMAT scores are provided through the official GMAT
                                score reporting system.
                            </p>

                            <p>
                                Candidates can send their scores to business schools
                                according to GMAT score-reporting policies.
                            </p>

                            <p>
                                GMAT scores are valid for five years from the date
                                of the exam.
                            </p>
                        ',
                        'sort_order' => 10,
                    ],

                    [
                        'section_type' => 'scores',
                        'title' => 'Score Requirements',
                        'content' => '
                            <p>
                                The GMAT Total Score ranges from 205 to 805.
                            </p>

                            <table>
                                <thead>
                                    <tr>
                                        <th>Measure</th>
                                        <th>Score Range</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Total Score</td>
                                        <td>205–805</td>
                                    </tr>
                                    <tr>
                                        <td>Quantitative Reasoning</td>
                                        <td>60–90</td>
                                    </tr>
                                    <tr>
                                        <td>Verbal Reasoning</td>
                                        <td>60–90</td>
                                    </tr>
                                    <tr>
                                        <td>Data Insights</td>
                                        <td>60–90</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>
                                Business schools establish their own admission
                                requirements and score expectations.
                            </p>
                        ',
                        'sort_order' => 11,
                    ],

                    [
                        'section_type' => 'universities',
                        'title' => 'Universities and Countries',
                        'content' => '
                            <p>
                                GMAT scores are used by business schools and
                                graduate management programmes internationally.
                            </p>

                            <ul>
                                <li>United States</li>
                                <li>Canada</li>
                                <li>United Kingdom</li>
                                <li>Australia</li>
                                <li>Europe</li>
                                <li>Asia</li>
                            </ul>

                            <p>
                                Applicants should verify whether their target
                                business school accepts GMAT and check its
                                programme-specific requirements.
                            </p>
                        ',
                        'sort_order' => 12,
                    ],

                    [
                        'section_type' => 'faq',
                        'title' => 'Frequently Asked Questions',
                        'content' => '
                            <div class="faq-item">
                                <div class="faq-question">What is GMAT?</div>
                                <p>
                                    GMAT is a graduate management admission test
                                    used by business schools.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">What is the GMAT score range?</div>
                                <p>
                                    The current GMAT Total Score ranges from 205 to 805.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">How long is the GMAT exam?</div>
                                <p>
                                    The GMAT exam takes 2 hours and 15 minutes,
                                    plus an optional 10-minute break.
                                </p>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question">How long are GMAT scores valid?</div>
                                <p>
                                    GMAT scores are valid for five years.
                                </p>
                            </div>
                        ',
                        'sort_order' => 13,
                    ],
                ];
            }

            /*
            |--------------------------------------------------------------------------
            | Save Sections
            |--------------------------------------------------------------------------
            */

            else {
                $sections = [];
            }

            foreach ($sections as $section) {

                ExamSection::updateOrCreate(
                    [
                        'exam_id' => $exam->id,
                        'section_type' => $section['section_type'],
                    ],
                    [
                        'title' => $section['title'],
                        'content' => $section['content'],
                        'sort_order' => $section['sort_order'],
                        'status' => true,
                    ]
                );
            }
        }
    }
}