<?php

namespace App\Data;

/**
 * Centralised content arrays for the Online Education and Corporate pages.
 *
 * Mirrors the existing project convention of keeping page copy in DRY PHP
 * arrays so content can be edited without touching Blade markup. Pulled
 * into views via ProgramsController / CorporateController.
 */
class ProgramsData
{
    /* =====================================================================
     | SECTION 1: ONLINE EDUCATION
     |=====================================================================*/

    public static function undergraduate(): array
    {
        return [
            'meta' => [
                'title' => 'Online Undergraduate Degree Programs (BBA/B.Com) | Ignition Edutech',
                'description' => 'Apply for a UGC-entitled online undergraduate degree (BBA / B.Com) with Ignition Edutech. Flexible distance learning, industry-ready curriculum and end-to-end admission support.',
                'keywords' => 'online undergraduate degree, online bachelor\'s program, UGC approved online degree, distance learning degree, flexible online education',
                'canonical' => '/online-undergraduate-program',
            ],
            'hero' => [
                'eyebrow' => 'Online Undergraduate Programs',
                'title' => 'Start your career with a UGC-entitled online undergraduate degree',
                'subtitle' => 'A 3-year online BBA / B.Com pathway built for school leavers and early-career learners who want a recognised degree without pausing life for a full-time campus course.',
                'stats' => [
                    ['value' => '3 Yrs', 'label' => 'Programme duration, 6 terms'],
                    ['value' => '6 Yrs', 'label' => 'Maximum validity window'],
                    ['value' => '100%', 'label' => 'Online, self-paced learning'],
                ],
            ],
            'highlights' => [
                ['title' => 'Decades of academic legacy', 'text' => 'Learn from a university with over four decades of experience delivering career-focused education to working learners.',  'icon' => 'bi-bank2',],
                ['title' => 'Industry-ready curriculum', 'text' => 'A UGC-entitled syllabus built with input from corporate recruiters, covering commerce, business administration and analytics fundamentals.' , 'icon' => 'bi-journal-bookmark-fill',],
                ['title' => 'Experienced faculty', 'text' => 'Sessions led by academicians from top-tier institutes and industry practitioners who bring real-world context to every module.' ,  'icon' => 'bi-person-video3',],
                ['title' => 'Learn on your schedule', 'text' => 'Round-the-clock access to live and recorded lectures so the degree fits around school, a job, or family commitments.' , 'icon' => 'bi-clock-history',],
            ],
            'specializations' => [
                ['name' => 'Bachelor of Commerce (B.Com)', 'text' => 'A foundation in accounting, finance, taxation and commerce fundamentals for learners aiming at finance-sector careers.',  'icon' => 'bi-calculator-fill',],
                ['name' => 'Bachelor of Business Administration (BBA)', 'text' => 'A broader management foundation spanning marketing, operations, HR and business analytics electives.',  'icon' => 'bi-briefcase-fill',
],
            ],
            'structure' => [
                'duration' => '3 Years',
                'validity' => '6 Years',
                'terms' => '6 Semesters',
                'evaluation' => 'Internal Assessment + Project + Term-End Examination',
            ],
            'methodology' => [
                ['title' => 'Study at your convenience', 'text' => 'A dedicated student portal and mobile app puts your entire courseware in one place, available whenever you have time to study.' , 'icon' => 'bi-phone-fill',],
                ['title' => 'Rich digital resources', 'text' => 'E-books, journals and lecture transcripts, plus round-the-clock access to recorded classes so nothing is missed.', 'icon' => 'bi-journals',
],
                ['title' => 'Dedicated support team', 'text' => 'Raise a ticket, book a callback, or use live chat for admissions and academic queries.', 'icon' => 'bi-headset',],
            ],
            'eligibility' => [
                'title' => 'Eligibility',
                'points' => [
                    'Passed HSC (10+2) in any stream from a recognised board.',
                    'Minimum 50% aggregate (45% for SC/ST/OBC/PwD candidates).',
                ],
            ],
            'career_outcomes' => [
                ['role' => 'Financial Advisor', 'text' => 'Guide individuals and families on savings, retirement planning and investment decisions.',  'icon' => 'bi-person-vcard-fill',],
                ['role' => 'Investment / Research Analyst', 'text' => 'Track markets and evaluate opportunities to support portfolio and business decisions.' , 'icon' => 'bi-bar-chart-line-fill',],
                ['role' => 'Business / Operations Associate', 'text' => 'Apply management fundamentals across marketing, operations and administrative functions.',  'icon' => 'bi-diagram-3-fill'],
            ],
            'admission_process' => [
                ['step' => 'Register', 'text' => 'Submit the online registration form and pay the admission processing fee.'],
                ['step' => 'Submit documents', 'text' => 'Upload attested academic records, photo ID and a passport-size photograph.'],
                ['step' => 'Pay program fee', 'text' => 'Choose annual or semester-wise payment; online and demand draft options are supported.'],
                ['step' => 'Get confirmed', 'text' => 'Once documents and payment are verified, your student number is issued and the study portal is activated.'],
            ],
            'faqs' => [
                ['q' => 'I discontinued my education a few years ago. Can I still apply?', 'a' => 'Yes. As long as you meet the eligibility criteria above, a gap in education does not disqualify you from applying.'],
                ['q' => 'Is this degree recognised for government and private sector jobs?', 'a' => 'The programs are UGC-entitled, which means the degree carries the same recognition as an on-campus qualification for employment and further studies.'],
                ['q' => 'Can I work a full-time job while pursuing this degree?', 'a' => 'Yes — the entire program is designed around asynchronous, self-paced online learning so it fits around a job or other commitments.'],
                ['q' => 'What happens if I clear my subjects but miss submitting a project?', 'a' => 'Our admission counsellors will walk you through the university\'s specific project resubmission and completion process for your batch.'],
            ],
            'cta' => [
                'title' => 'Ready to start your undergraduate journey?',
                'text' => 'Talk to an Ignition Edutech education advisor about eligibility, fees and the right specialisation for your goals.',
                'button' => 'Get Free Counselling',
            ],
        ];
    }

    public static function mba(): array
    {
        return [
            'meta' => [
                'title' => 'Online MBA Program | UGC Approved MBA for Working Professionals | Ignition Edutech',
                'description' => 'Pursue a UGC approved Online MBA with Ignition Edutech. Choose from 7 specialisations, study without quitting your job, and get end-to-end admission guidance.',
                'keywords' => 'online mba, executive mba online, ugc approved mba, online management degree, mba for working professionals',
                'canonical' => '/online-mba-program',
            ],
            'hero' => [
                'eyebrow' => 'Online MBA Program',
                'title' => 'A UGC-entitled Online MBA built for working professionals',
                'subtitle' => 'A 2-year, 4-semester management degree that builds general management and leadership capability without requiring a career break.',
                'stats' => [
                    ['value' => '2 Yrs', 'label' => 'Programme duration'],
                    ['value' => '7', 'label' => 'Specialisations to choose from'],
                    ['value' => '4 Yrs', 'label' => 'Maximum validity window'],
                ],
            ],
            'highlights' => [
                ['title' => 'Be industry-ready', 'text' => 'A UGC-entitled curriculum designed with the skill sets that employers actively look for in management hires.', 'icon' => 'bi-person-workspace',],
                ['title' => 'Robust, relevant curriculum', 'text' => 'Coursework recognised by leading corporates and startups, covering both classical management theory and current practice.', 'icon' => 'bi-journal-richtext',],
                ['title' => 'Faculty from top institutes', 'text' => 'Learn from academicians associated with premier institutes alongside working industry veterans.', 'icon' => 'bi-award-fill',],
                ['title' => 'Learn without a career break', 'text' => 'Live and recorded lectures, available any time, mean you keep working while you study.', 'icon' => 'bi-calendar2-check-fill',],
            ],
            'specializations' => [
                ['name' => 'Marketing Management'],
                ['name' => 'Business Management'],
                ['name' => 'Financial Management'],
                ['name' => 'Human Resource Management'],
                ['name' => 'Operations & Data Sciences'],
                ['name' => 'Information Technology Management'],
                ['name' => 'Business Analytics'],
            ],
            'structure' => [
                'duration' => '2 Years',
                'validity' => '4 Years',
                'terms' => '4 Semesters',
                'evaluation' => 'Internal Assessment + Term-End Examination',
            ],
            'industry_relevance' => [
                ['title' => 'Placement & career support', 'text' => 'Access one-on-one coaching, resume and LinkedIn profile development, mock interviews, and aptitude/psychometric assessments through the program\'s career services track.', 'icon' => 'bi-briefcase-fill',],
                ['title' => 'A peer group of working professionals', 'text' => 'Study alongside a diverse cohort of professionals from corporates and startups across India and abroad, many bringing over a decade of work experience.', 'icon' => 'bi-person-hearts',],
            ],
            'eligibility' => [
                'title' => 'Eligibility',
                'points' => [
                    'A bachelor\'s degree (10+2+3) in any discipline from a recognised university, or an equivalent qualification recognised by the Association of Indian Universities.',
                    'Minimum 50% marks at graduation (45% for SC/ST/OBC/PwD candidates).',
                    'No prior work experience is mandatory — working professionals and fresh graduates can both apply.',
                ],
            ],
            'career_outcomes' => [
                ['role' => 'Marketing / Brand Manager', 'text' => 'Lead go-to-market strategy, brand positioning and campaign planning.',  'icon' => 'bi-megaphone-fill',],
                ['role' => 'Financial Analyst / Manager', 'text' => 'Drive budgeting, financial planning and investment decisions for a business.',  'icon' => 'bi-cash-stack',],
                ['role' => 'HR Business Partner', 'text' => 'Manage talent strategy, recruitment and organisational development.',  'icon' => 'bi-person-hearts',],
                ['role' => 'Operations / Business Analytics Lead', 'text' => 'Optimise processes and use data to guide business decisions.', 'icon' => 'bi-bar-chart-line-fill',],
            ],
            'admission_process' => [
                ['step' => 'Register', 'text' => 'Complete the online registration form and pay the admission processing fee.'],
                ['step' => 'Submit documents', 'text' => 'Upload attested academic records, photo ID and a passport-size photograph.'],
                ['step' => 'Pay program fee', 'text' => 'Pay annually or semester-wise; online payment and demand draft are both accepted.'],
                ['step' => 'Get confirmed', 'text' => 'On verification of documents and payment, your student number is issued and your portal is activated.'],
            ],
            'faqs' => [
                ['q' => 'Do I need work experience to apply for the Online MBA?', 'a' => 'No. You only need to meet the eligibility criteria above — the program welcomes both fresh graduates and working professionals.'],
                ['q' => 'Can I keep working full-time while studying?', 'a' => 'Yes. The program is built around flexible, self-paced online delivery so you don\'t need to pause your career.'],
                ['q' => 'How do I access lecture recordings if I miss a live session?', 'a' => 'All sessions are recorded and made available on the student portal with round-the-clock access.'],
                ['q' => 'Can I enrol in another program alongside the Online MBA?', 'a' => 'Speak with an Ignition Edutech counsellor about your specific case — university policy on concurrent enrolment can vary by program.'],
            ],
            'cta' => [
                'title' => 'Ready to advance your management career?',
                'text' => 'Get personalised guidance on choosing the right MBA specialisation, understanding fees, and starting your application.',
                'button' => 'Get Free Counselling',
            ],
        ];
    }

    public static function executive(): array
    {
        return [
            'meta' => [
                'title' => 'Executive MBA for Working Professionals | Ignition Edutech',
                'description' => 'Advance into senior leadership with an Executive MBA (MBA WX) built for experienced working professionals. Five specialisations, campus immersion, and end-to-end admission support.',
                'keywords' => 'executive program, executive mba, leadership development, professional education, working professionals mba',
                'canonical' => '/executive-program',
            ],
            'hero' => [
                'eyebrow' => 'Executive Program',
                'title' => 'An Executive MBA built for senior working professionals',
                'subtitle' => 'A leadership-focused MBA WX program for experienced professionals, combining live online learning with an on-campus immersion for networking and a capstone project for applied learning.',
                'stats' => [
                    ['value' => '2 Yrs', 'label' => 'Programme duration, 8 terms'],
                    ['value' => '5', 'label' => 'Leadership specialisations'],
                    ['value' => '3+ Yrs', 'label' => 'Work experience expected'],
                ],
            ],
            'highlights' => [
                ['title' => 'Decades of academic legacy', 'text' => 'A program from a university with four decades of experience developing working professionals into business leaders.' ,  'icon' => 'bi-bank2',],
                ['title' => 'Be industry-ready', 'text' => 'A UGC-entitled curriculum built around the leadership and decision-making skills senior roles demand.' ,     'icon' => 'bi-person-workspace',],
                ['title' => 'Faculty from top institutes', 'text' => 'Learn from academicians associated with premier institutes and industry veterans who have led teams themselves.' ,   'icon' => 'bi-award-fill',],
                ['title' => 'Applied, experiential learning', 'text' => 'A foundation module, capstone project and campus immersion round out the online coursework with real-world application.' , 'icon' => 'bi-kanban-fill',
],
            ],
            'specializations' => [
                ['name' => 'Marketing Management'],
                ['name' => 'Leadership & Strategy'],
                ['name' => 'Operations & Supply Chain Management'],
                ['name' => 'Applied Finance'],
                ['name' => 'Digital Marketing'],
            ],
            'structure' => [
                'duration' => '2 Years',
                'validity' => '4 Years',
                'terms' => '8 Terms',
                'evaluation' => 'Internal Assessment + Term-End Examination',
            ],
            'leadership_benefits' => [
                ['title' => 'Foundation module', 'text' => 'Begin with a leadership-oriented foundation module designed to sharpen core management thinking.' ,  'icon' => 'bi-diagram-3-fill',],
                ['title' => 'Capstone project', 'text' => 'Apply what you\'ve learned to a real business problem through a guided capstone project.' ,  'icon' => 'bi-kanban-fill',],
                ['title' => 'Campus immersion', 'text' => 'Network in person with faculty and peers during an on-campus immersion component.' ,   'icon' => 'bi-people-fill',],
            ],
            'eligibility' => [
                'title' => 'Eligibility',
                'points' => [
                    'A bachelor\'s degree (10+2+3) in any discipline from a recognised university, or an equivalent AIU-recognised qualification, with a minimum of 55% marks (50% for SC/ST/OBC/PwD candidates).',
                    'A minimum of 3 years of work experience.',
                ],
            ],
            'career_outcomes' => [
                ['role' => 'General Manager / Business Head', 'text' => 'Take on P&L ownership and cross-functional leadership responsibility.', 'icon' => 'bi-briefcase-fill',],
                ['role' => 'Strategy & Operations Leader', 'text' => 'Shape organisational strategy and lead large-scale operational initiatives.', 'icon' => 'bi-diagram-3-fill',],
                ['role' => 'Senior Finance Leader', 'text' => 'Move into applied finance leadership roles spanning investment and corporate finance.', 'icon' => 'bi-cash-stack',],
            ],
            'admission_process' => [
                ['step' => 'Apply', 'text' => 'Submit the online application and pay the application fee.'],
                ['step' => 'Submit documents', 'text' => 'Upload academic records, work experience proof, photo ID and a photograph.'],
                ['step' => 'Personal interview', 'text' => 'Shortlisted candidates go through a personal interview as part of the selection process.'],
                ['step' => 'Fee payment & confirmation', 'text' => 'Selected candidates pay a seat-reservation amount, followed by the balance fee, to confirm admission.'],
            ],
            'faqs' => [
                ['q' => 'Do I need to be currently employed to apply for the Executive Program?', 'a' => 'The program is designed for experienced professionals, and a minimum of 3 years of work experience is required as part of eligibility.'],
                ['q' => 'Is a written entrance test required?', 'a' => 'Selection is based primarily on your application and a personal interview rather than a separate written entrance test — confirm the current process with our counsellors.'],
                ['q' => 'How does the on-campus immersion work?', 'a' => 'It is a short, scheduled in-person component that complements the online coursework, mainly focused on networking and applied sessions.'],
                ['q' => 'How do I attend live lectures?', 'a' => 'Live sessions are streamed through the student portal, with recordings made available afterwards for anyone who misses a session.'],
            ],
            'cta' => [
                'title' => 'Ready to take the next step in your leadership career?',
                'text' => 'Speak with an Ignition Edutech advisor about eligibility, the interview process and choosing the right specialisation.',
                'button' => 'Get Free Counselling',
            ],
        ];
    }

    /* =====================================================================
     | SECTION 2: CORPORATE (sourced from the Corporate Education Partnership PDF)
     |=====================================================================*/

    public static function corporateEducation(): array
    {
        return [
            'meta' => [
                'title' => 'Corporate Education Partnership Program | Ignition Edutech',
                'description' => 'Partner with Ignition Edutech to give your employees access to flexible, UGC approved online education programs that support upskilling and career growth.',
                'keywords' => 'corporate education partnership, employee upskilling, corporate learning programs, online education for employees',
                'canonical' => '/corporate-education-partnership',
            ],
            'hero' => [
                'eyebrow' => 'Corporate Education Partnership',
                'title' => 'Invest in your people. Invest in their future.',
                'subtitle' => 'Partner with Ignition Edutech to give employees access to flexible online education programs from leading universities, so they can upskill and grow without stepping away from their roles.',
            ],
            'key_points' => [
                ['title' => 'Employee upskilling', 'text' => 'Access to curated online undergraduate, postgraduate, MBA and certification programs.', 'icon' => 'bi-mortarboard-fill',],
                ['title' => 'Career advancement', 'text' => 'Structured pathways that support promotion-readiness and role growth.', 'icon' => 'bi-graph-up-arrow',],
                ['title' => 'Flexible online learning', 'text' => 'Programs designed to work alongside full-time employment.', 'icon' => 'bi-laptop',],
                ['title' => 'Industry-relevant programs', 'text' => 'Curriculum aligned with current market and role requirements.',  'icon' => 'bi-briefcase-fill'],
                ['title' => 'Recognised qualifications', 'text' => 'Degrees and certifications from established partner universities and institutions.', 'icon' => 'bi-patch-check-fill',],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Corporate Partnership', 'text' => 'We work with your organisation to understand employee education needs and identify relevant programs.'],
                ['step' => '02', 'title' => 'Curated Programs', 'text' => 'Employees get a shortlist of suitable undergraduate, postgraduate, MBA and certification programs from our partner universities.'],
                ['step' => '03', 'title' => 'Employee Counselling', 'text' => 'Education advisors give personalised guidance based on each employee\'s goals, experience and aspirations.'],
                ['step' => '04', 'title' => 'Enrolment Support', 'text' => 'We support employees through application, documentation and admission.'],
                ['step' => '05', 'title' => 'Learn While You Work', 'text' => 'Employees pursue their education through flexible online learning alongside their day-to-day role.'],
            ],
            'benefits_org' => [
                'Upskill & retain talent',
                'Support employees\' career growth',
                'Build a culture of continuous learning',
                'Improve employee engagement',
                'Enable access to recognised qualifications',
                'Create structured education benefits for employees',
            ],
            'benefits_employee' => [
                'Pursue higher education while working',
                'Upgrade existing qualifications',
                'Develop new, relevant skills',
                'Prepare for career progression',
                'Choose programs aligned with personal goals',
                'Receive end-to-end admission guidance',
            ],
            'cta' => [
                'title' => 'Turn employee ambition into career growth',
                'text' => 'Partner with us to give your employees accessible, flexible and career-focused online education opportunities.',
                'button' => 'Discuss a Partnership',
            ],
        ];
    }

    public static function corporateTraining(): array
    {
        return [
            'meta' => [
                'title' => 'Corporate Training Programs | Soft Skills, Leadership & Future-Ready Skills | Ignition Edutech',
                'description' => 'Corporate training programs from Ignition Edutech covering soft skills, personality development, leadership and future-ready market skills — customised by seniority level.',
                'keywords' => 'corporate training, soft skills training, leadership training, workplace training programs, employee development',
                'canonical' => '/corporate-training',
            ],
            'hero' => [
                'eyebrow' => 'Corporate Training',
                'title' => 'Build better skills. Stronger professionals. Future-ready teams.',
                'subtitle' => 'Practical, workplace-oriented training that helps organisations build confident, adaptable professionals equipped for a constantly evolving workplace.',
            ],
            'training_areas' => [
                [
                    'title' => 'Soft Skills & Communication',
                    'text' => 'Develop effective communication and interpersonal skills that help employees collaborate, present ideas and build stronger professional relationships.',
                    'icon' => 'bi-chat-dots-fill',
                    'items' => ['Business Communication', 'Verbal & Written Communication', 'Presentation Skills', 'Interpersonal Skills', 'Active Listening', 'Team Collaboration', 'Workplace Etiquette'],
                ],
                [
                    'title' => 'Personality Development',
                    'text' => 'Help employees build the confidence, mindset and professional presence needed to succeed in today\'s competitive workplace.',
                    'icon' => 'bi-person-badge-fill',
                    'items' => ['Confidence Building', 'Professional Grooming', 'Leadership Presence', 'Emotional Intelligence', 'Positive Mindset', 'Self-Awareness', 'Time & Stress Management'],
                ],
                [
                    'title' => 'Current Market & Industry Trends',
                    'text' => 'Keep your workforce informed about the changing business environment and the skills that matter today.',
                    'icon' => 'bi-graph-up-arrow',
                    'items' => ['Emerging Industry Trends', 'Changing Job Market', 'New-Age Skills', 'Digital Transformation', 'AI & Workplace Trends', 'Future of Work', 'Industry & Career Insights'],
                ],
                [
                    'title' => 'Leadership & Team Effectiveness',
                    'text' => 'Develop professionals who can take ownership, communicate effectively, and contribute meaningfully to their teams.',
                    'icon' => 'bi-people-fill',
                    'items' => ['Team Building', 'Leadership Skills', 'Decision Making', 'Problem Solving', 'Conflict Management', 'Delegation & Ownership', 'Managerial Effectiveness'],
                ],
            ],
            'why_training' => [
                'Skills evolve, markets change and people grow — our programs help organisations develop, upskill, adapt, perform and grow.',
                'We focus on practical, workplace-oriented learning that employees can apply immediately in their day-to-day roles.',
            ],
            'audience_cards' => [
                ['title' => 'Freshers & Young Professionals', 'text' => 'Build workplace confidence, communication and foundational professional skills.',  'icon' => 'bi-rocket-takeoff-fill',],
                ['title' => 'Mid-Level Professionals', 'text' => 'Strengthen leadership, collaboration and managerial capabilities.',  'icon' => 'bi-person-workspace',],
                ['title' => 'Managers & Team Leaders', 'text' => 'Develop leadership presence, decision-making and people-management skills.',  'icon' => 'bi-people-fill',],
                ['title' => 'Senior Professionals', 'text' => 'Stay connected with emerging market trends and evolving business practices.', 'icon' => 'bi-bar-chart-line-fill',],
            ],
            'cta' => [
                'title' => 'Empower your people for what\'s next',
                'text' => 'The professionals of tomorrow need more than technical knowledge — they need communication, confidence, adaptability, leadership and emotional intelligence. Let\'s build that culture together.',
                'button' => 'Discuss Your Training Requirements',
            ],
        ];
    }

    public static function corporateRecruitment(): array
    {
        return [
            'meta' => [
                'title' => 'Corporate Recruitment & Training Solutions | Ignition Edutech',
                'description' => 'End-to-end corporate recruitment and employee training solutions from Ignition Edutech — hire the right talent and develop the people you already have.',
                'keywords' => 'corporate recruitment, campus hiring, employee training solutions, talent development, recruitment drives',
                'canonical' => '/corporate-recruitment-training',
            ],
            'hero' => [
                'eyebrow' => 'Corporate Recruitment & Training Solutions',
                'title' => 'Building talent. Developing people. Driving growth.',
                'subtitle' => 'We help organisations address both sides of the talent journey — hiring the right people, and developing the people they already have.',
            ],
            'recruitment_services' => [
                ['title' => 'Recruitment Support', 'text' => 'End-to-end assistance across the hiring lifecycle.',  'icon' => 'bi-headset'],
                ['title' => 'Talent Sourcing', 'text' => 'Identify and reach candidates matching your role requirements.',  'icon' => 'bi-search'],
                ['title' => 'Campus & Graduate Recruitment', 'text' => 'Structured hiring drives for early-career talent.',   'icon' => 'bi-mortarboard-fill'],
                ['title' => 'Entry-Level Hiring', 'text' => 'Build your bench of entry-level talent efficiently.', 'icon' => 'bi-person-plus-fill'],
                ['title' => 'Skilled Professional Hiring', 'text' => 'Source experienced professionals for specialised roles.', 'icon' => 'bi-briefcase-fill'],
                ['title' => 'Candidate Screening & Shortlisting', 'text' => 'Rigorous screening to present only relevant candidates.', 'icon' => 'bi-check-circle-fill'],
                ['title' => 'Recruitment Drives', 'text' => 'On-ground and virtual hiring drives tailored to volume needs.', 'icon' => 'bi-calendar-event-fill'],

            ],
            'development_areas' => [

                [
                    'title' => 'Soft Skills & Professional Development',
                    'items' => ['Business Communication', 'Presentation Skills', 'Interpersonal Skills', 'Teamwork & Collaboration', 'Leadership Skills', 'Emotional Intelligence', 'Time Management', 'Workplace Etiquette'],
                    'icon' => 'bi-person-workspace',
                ],
                [
                    'title' => 'Personality Development',
                    'items' => ['Confidence Building', 'Professional Grooming', 'Positive Mindset', 'Self-Awareness', 'Leadership Presence', 'Problem Solving', 'Decision Making'],
                    'icon' => 'bi-person-badge-fill',
                ],
                [
                    'title' => 'Market & Future-Ready Skills',
                    'items' => ['Current Market Trends', 'Industry Updates', 'Emerging Skills', 'Digital Transformation', 'AI & Workplace Trends', 'Future of Work', 'Career & Industry Insights'],
                    'icon' => 'bi-graph-up-arrow',
                ],

            ],
            'benefits_org' => [
                'Access to relevant talent',
                'Develop employee capabilities',
                'Address skill gaps',
                'Improve workplace effectiveness',
                'Build future-ready teams',
            ],
            'benefits_employee' => [
                'Build confidence',
                'Improve professional skills',
                'Understand industry trends',
                'Develop leadership capabilities',
                'Prepare for career growth',
            ],
            'why_us' => [
                ['title' => 'Recruitment', 'text' => 'Helping organisations find the right people.', 'icon' => 'bi-person-plus-fill',],
                ['title' => 'Training', 'text' => 'Helping organisations develop the people they already have.',  'icon' => 'bi-mortarboard-fill',],
                ['title' => 'Education', 'text' => 'Helping employees explore higher education and professional learning opportunities.', 'icon' => 'bi-book-half',],
            ],
            'cta' => [
                'title' => 'One partner. Complete talent solutions.',
                'text' => 'From identifying the right candidates to strengthening the capabilities of your existing workforce — let\'s build your talent pipeline together.',
                'button' => 'Talk to Our Team',
            ],
        ];
    }
}
