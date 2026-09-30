<?php

namespace App\Data;

/**
 * Content for the "Student Potential" counselling pages.
 * Add career() / dmit() here too if/when their content also moves out
 * of hard-coded Blade — for now this only covers the new Psychometric
 * Assessment page, matching the section shapes already used by
 * /counselling/career-counselling and /counselling/dmit-test.
 */
class CounsellingData
{
    public static function psychometric_assessment(): array
    {
        return [
            'meta' => [
                'title' => 'Psychometric Assessment for Students | Career Guidance | Ignition Edutech',
                'description' => 'Take Ignition Edutech\'s Psychometric Assessment to understand your aptitude, interests, personality and strengths, and get expert career counselling on the results.',
                'keywords' => 'psychometric assessment, career psychometric test, aptitude test for students, career counselling India, personality assessment students',
                'canonical' => '/counselling/psychometric-assessment',
            ],
            'hero' => [
                'eyebrow' => 'Psychometric Assessment',
                'title' => 'Discover your strengths. Understand your potential. Choose your direction.',
                'subtitle' => 'Choosing the right career is easier when you understand yourself first. Our Psychometric Assessment helps you understand your interests, aptitude, personality traits, strengths and natural preferences, so you can explore career paths that are genuinely aligned with who you are.',
                'stats' => [
                    ['value' => '5', 'label' => 'Assessment dimensions'],
                    ['value' => '5+', 'label' => 'Learner stages covered'],
                    ['value' => '5', 'label' => 'Step guided process'],
                ],
                'cta_primary' => ['label' => 'Take the Assessment', 'href' => route('contact')],
                'cta_secondary' => ['label' => 'See what it measures', 'href' => '#psy-pillars'],
                'cta_tertiary' => ['label' => 'Explore the 5 pillars', 'href' => '#edu-psy-pillars',],
            ],
            'pillars' => [
                'kicker' => 'Psychometric Assessment Framework',
                'title' => 'What does our Psychometric Assessment evaluate?',
                'center_label' => 'Structured Career Insights',
                'items' => [
                    ['title' => 'Aptitude', 'text' => 'Your natural abilities, logical thinking, numerical skills, verbal reasoning and problem-solving approach.'],
                    ['title' => 'Interests', 'text' => 'The subjects, activities and professional areas that naturally attract you.'],
                    ['title' => 'Personality', 'text' => 'Your personality traits, behavioural preferences, working style and interaction patterns.'],
                    ['title' => 'Strengths & Potential', 'text' => 'Your key strengths and the areas where you may have greater potential to develop.'],
                    ['title' => 'Career Orientation', 'text' => 'Career domains and professional pathways that align with your assessment profile.'],
                ],
            ],
            'why' => [
                'kicker' => 'Why Take a Psychometric Assessment?',
                'title' => 'Choose a career based on who you are — not just your marks',
                'text' => 'Choosing a career based only on marks, trends or someone else\'s expectations can sometimes lead to confusion. A psychometric assessment provides structured insights to help you make a more informed career decision.',
                'benefits' => [
                    'Understand yourself better',
                    'Identify your strengths and interests',
                    'Explore suitable career domains',
                    'Reduce confusion while selecting subjects or courses',
                    'Make informed academic decisions',
                    'Understand possible career pathways',
                    'Build greater confidence in your career choices',
                ],
            ],
            'audience' => [
                'kicker' => 'Who Can Take the Assessment?',
                'title' => 'Useful at every stage of the academic journey',
                'items' => [
                    ['title' => 'Students after Class 8–10', 'text' => 'Explore interests and understand possible academic streams and career directions.', 'icon' => 'bi bi-mortarboard-fill',],
                    ['title' => 'Students after Class 10', 'text' => 'Gain insights while choosing between Science, Commerce, Arts/Humanities or other pathways.',  'icon' => 'bi bi-book-half',],
                    ['title' => 'Students after Class 12', 'text' => 'Explore undergraduate courses and career options aligned with their profile.', 'icon' => 'bi bi-journal-bookmark-fill',],
                    ['title' => 'College Students & Graduates', 'text' => 'Understand strengths, interests and possible career directions for further education or employment.',  'icon' => 'bi bi-person-workspace',],
                    ['title' => 'Working Professionals', 'text' => 'Gain clarity when considering career transitions, higher education or professional development.',  'icon' => 'bi bi-briefcase-fill',],
                ],
            ],
            'process' => [
                'kicker' => 'What You Get',
                'title' => 'Assessment → Analysis → Guidance → Action',
            
                'steps' => [
                    ['title' => 'Psychometric Assessment', 'text' => 'Complete a structured assessment designed to understand multiple aspects of your profile.'],
                    ['title' => 'Detailed Report', 'text' => 'Receive insights into your aptitude, interests, personality and career preferences.'],
                    ['title' => 'Expert Counselling Session', 'text' => 'Discuss your results with a career counsellor and understand what they mean for you.'],
                    ['title' => 'Career Exploration', 'text' => 'Explore relevant career domains, courses and educational pathways.'],
                    ['title' => 'Personalised Career Roadmap', 'text' => 'Get a clearer direction for your next academic or career decision.'],
                ],
            ],
            'quote' => '“The assessment provides structured insights to help you explore career options aligned with your strengths, interests and personality.”',
            'cta' => [
                'title' => 'Your career should match your potential — not just your marks.',
                'text' => 'Take the Psychometric Assessment and start understanding your career direction with greater clarity.',
                'button' => 'Take the Assessment',
                'form_fields' => ['Name', 'Mobile Number', 'Email Address', 'Current Class / Qualification'],
            ],
        ];
    }
}
