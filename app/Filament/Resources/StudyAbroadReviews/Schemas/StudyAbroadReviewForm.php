<?php

namespace App\Filament\Resources\StudyAbroadReviews\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudyAbroadReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // STUDENT INFORMATION
            Section::make('Student Information')
                ->description('Personal details of the student who submitted this review.')
                ->icon('heroicon-m-user-circle')
                ->iconColor('info')
                ->columns(2)
                ->columnSpanFull()
                ->schema([
                    TextInput::make('student_name')
                        ->label('Student Name')
                        ->placeholder('Enter student full name')
                        ->helperText('Full name of the reviewer.')
                        ->prefixIcon('heroicon-m-user')
                        ->prefixIconColor('info')
                        ->required()
                        ->maxLength(150),

                    TextInput::make('student_email')
                        ->label('Email Address')
                        ->placeholder('student@example.com')
                        ->prefixIcon('heroicon-o-envelope')
                        ->prefixIconColor('primary')
                        ->email()
                        ->required()
                        ->maxLength(255),

                    TextInput::make('student_mobile')
                        ->label('Mobile Number')
                        ->placeholder('Enter mobile number')
                        ->prefixIcon('heroicon-o-phone')
                        ->prefixIconColor('success')
                        ->tel()
                        ->required()
                        ->maxLength(20)
                        ->columnSpanFull(),
                ]),

            // UNIVERSITY AND COURSE
            Section::make('University & Course')
                ->description('Academic institution and enrollment information.')
                ->icon('heroicon-o-academic-cap')
                ->iconColor('primary')
                ->columns(2)
                ->columnSpanFull()
                ->schema([
                    TextInput::make('university_name')
                        ->label('University Name')
                        ->placeholder('Enter university name')
                        ->prefixIcon('heroicon-o-building-library')
                        ->prefixIconColor('primary')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('country')
                        ->label('Country')
                        ->placeholder('e.g. Canada, United Kingdom')
                        ->prefixIcon('heroicon-o-globe-alt')
                        ->prefixIconColor('info')
                        ->required()
                        ->maxLength(100),

                    TextInput::make('course_name')
                        ->label('Course Name')
                        ->placeholder('e.g. MSc Computer Science')
                        ->prefixIcon('heroicon-o-book-open')
                        ->prefixIconColor('warning')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('enrollment_year')
                        ->label('Enrollment Year')
                        ->placeholder('e.g. 2025')
                        ->prefixIcon('heroicon-o-calendar')
                        ->prefixIconColor('info')
                        ->numeric()
                        ->minValue(1900)
                        ->maxValue(2100)
                        ->required(),

                    TextInput::make('annual_tuition_fees')
                        ->label('Annual Tuition Fees')
                        ->placeholder('Enter annual fees')
                        ->prefixIcon('heroicon-o-banknotes')
                        ->prefixIconColor('success')
                        ->numeric()
                        ->prefix('$')
                        ->minValue(0)
                        ->helperText('Enter the annual tuition amount.'),
                ]),

            // REVIEW DETAILS
            Section::make('Review Details')
                ->description('Read and manage the student’s written feedback.')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->iconColor('primary')
                ->columns(2)
                ->columnSpanFull()
                ->schema([
                    TextInput::make('review_headline')
                        ->label('Review Headline')
                        ->placeholder('Give this review a short title')
                        ->prefixIcon('heroicon-o-pencil-square')
                        ->prefixIconColor('warning')
                        ->required()
                        ->maxLength(100)
                        ->columnSpanFull(),

                    Textarea::make('reason_for_choice')
                        ->label('Why Did the Student Choose This University?')
                        ->placeholder('Student’s reasons for choosing this university...')
                        ->rows(4)
                        ->autosize()
                        ->required()
                        ->columnSpanFull(),

                    Textarea::make('likes')
                        ->label('What the Student Likes')
                        ->placeholder('Positive experiences, facilities, teaching, etc.')
                        ->rows(4)
                        ->autosize()
                        ->required(),

                    Textarea::make('improvements')
                        ->label('Areas for Improvement')
                        ->placeholder('What could the university improve?')
                        ->rows(4)
                        ->autosize()
                        ->required(),

                    Textarea::make('advice')
                        ->label('Advice for Future Students')
                        ->placeholder('Useful advice for prospective students...')
                        ->rows(3)
                        ->autosize()
                        ->columnSpanFull(),

                    Textarea::make('campus_jobs')
                        ->label('Campus Jobs')
                        ->placeholder('Student feedback about campus employment...')
                        ->rows(3)
                        ->autosize()
                        ->columnSpanFull(),
                ]),

            // RATINGS AND STUDENT LIFE
            Section::make('Ratings & Student Life')
                ->description('Academic performance, overall satisfaction and living arrangements.')
                ->icon('heroicon-o-star')
                ->iconColor('warning')
                ->columns(2)
                ->columnSpanFull()
                ->schema([
                    TextInput::make('academics_rating')
                        ->label('Academics Rating')
                        ->placeholder('Rate from 1 to 5')
                        ->prefixIcon('heroicon-o-academic-cap')
                        ->prefixIconColor('info')
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(5)
                        ->required()
                        ->helperText('Enter a rating between 1 and 5.'),

                    TextInput::make('overall_rating')
                        ->label('Overall Rating')
                        ->placeholder('Rate from 1 to 5')
                        ->prefixIcon('heroicon-o-star')
                        ->prefixIconColor('warning')
                        ->numeric()
                        ->minValue(1)
                        ->maxValue(5)
                        ->required()
                        ->helperText('Enter a rating between 1 and 5.'),

                    TextInput::make('placements_support')
                        ->label('Placement Support')
                        ->placeholder('Describe the placement support')
                        ->prefixIcon('heroicon-o-briefcase')
                        ->prefixIconColor('success')
                        ->required()
                        ->maxLength(50),

                    TextInput::make('accommodation_type')
                        ->label('Accommodation Type')
                        ->placeholder('e.g. University hostel, private rental')
                        ->prefixIcon('heroicon-o-home')
                        ->prefixIconColor('primary')
                        ->required()
                        ->maxLength(100),
                ]),

            // MODERATION
            Section::make('Review Moderation')
                ->description('Control whether this review is published on the public website.')
                ->icon('heroicon-o-shield-check')
                ->iconColor('warning')
                ->columnSpanFull()
                ->schema([
                    Select::make('status')
                        ->label('Publication Status')
                        ->options([
                            'pending' => 'Pending Review',
                            'approved' => 'Approved & Published',
                            'rejected' => 'Rejected',
                        ])
                        ->native(false)
                        ->required()
                        ->default('pending')
                        ->selectablePlaceholder(false)
                        ->helperText('Only approved reviews should appear on the public reviews page.')
                        ->columnSpanFull(),
                ]),
        ]);
    }
}
