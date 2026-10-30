<?php

namespace App\Filament\Resources\StudyIndiaReviews\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudyIndiaReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // 1. Student Information
                Section::make('Student Information')
                    ->description('Personal and contact details of the student.')
                    ->icon('heroicon-o-user')
                    ->columns(2)
                    ->schema([
                        TextInput::make('study_india_user_id')
                            ->label('Student Account ID')
                            ->numeric()
                            ->required(),

                        TextInput::make('student_name')
                            ->label('Student Name')
                            ->default(null),

                        TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->default(null),

                        TextInput::make('country_code')
                            ->label('Country Code')
                            ->default(null),

                        TextInput::make('mobile')
                            ->label('Mobile Number')
                            ->default(null),

                        TextInput::make('gender')
                            ->default(null),

                        TextInput::make('linkedin')
                            ->label('LinkedIn Profile')
                            ->url()
                            ->default(null),

                        TextInput::make('referral_code')
                            ->label('Referral Code')
                            ->default(null),
                    ])
                    ->columnSpanFull(),

                // 2. College and Course Details
                Section::make('College & Course Details')
                    ->description('College, course, and admission information.')
                    ->icon('heroicon-o-academic-cap')
                    ->columns(2)
                    ->schema([
                        TextInput::make('college_name')
                            ->label('College Name')
                            ->required(),

                        TextInput::make('college_display_name')
                            ->label('College Display Name')
                            ->default(null),

                        TextInput::make('course')
                            ->label('Course')
                            ->required(),

                        TextInput::make('graduation_year')
                            ->label('Admission / Graduation Year')
                            ->numeric()
                            ->default(null),

                        TextInput::make('class_size')
                            ->label('Class Size')
                            ->numeric()
                            ->default(null),

                        TextInput::make('reservation')
                            ->label('Reservation Applicable')
                            ->default(null),

                        TextInput::make('reservation_type')
                            ->label('Reservation Category')
                            ->default(null),

                        TextInput::make('gdpi')
                            ->label('GD/PI')
                            ->default(null),
                    ])
                    ->columnSpanFull(),

                // 3. Academic Information
                Section::make('Academic Information')
                    ->description('Previous education and academic scores.')
                    ->icon('heroicon-o-book-open')
                    ->columns(2)
                    ->schema([
                        TextInput::make('board_10')
                            ->label('Class 10 Board')
                            ->default(null),

                        TextInput::make('score_10')
                            ->label('Class 10 Score')
                            ->numeric()
                            ->default(null),

                        TextInput::make('score_type_10')
                            ->label('Class 10 Score Type')
                            ->default(null),

                        TextInput::make('board_12')
                            ->label('Class 12 Board')
                            ->default(null),

                        TextInput::make('score_12')
                            ->label('Class 12 Score')
                            ->numeric()
                            ->default(null),

                        TextInput::make('score_type_12')
                            ->label('Class 12 Score Type')
                            ->default(null),

                        TextInput::make('graduation_course')
                            ->label('Graduation Course')
                            ->default(null),

                        TextInput::make('graduation_score')
                            ->label('Graduation Score')
                            ->numeric()
                            ->default(null),

                        TextInput::make('graduation_score_type')
                            ->label('Graduation Score Type')
                            ->default(null),
                    ])
                    ->columnSpanFull(),

                // 4. Ratings and Review Content
                Section::make('Ratings & Review Content')
                    ->description('Student ratings, feedback, pros, and cons.')
                    ->icon('heroicon-o-star')
                    ->columns(2)
                    ->schema([
                        TextInput::make('overall_rating')
                            ->label('Overall Rating (out of 5)')
                            ->numeric()
                            ->required(),

                        TextInput::make('academics_rating')
                            ->label('Academics Rating')
                            ->numeric()
                            ->default(null),

                        TextInput::make('faculty_rating')
                            ->label('Faculty Rating')
                            ->numeric()
                            ->default(null),

                        TextInput::make('placements_rating')
                            ->label('Placements Rating')
                            ->numeric()
                            ->default(null),

                        TextInput::make('infrastructure_rating')
                            ->label('Infrastructure Rating')
                            ->numeric()
                            ->default(null),

                        TextInput::make('campus_life_rating')
                            ->label('Campus Life Rating')
                            ->numeric()
                            ->default(null),

                        TextInput::make('review_title')
                            ->label('Review Title')
                            ->default(null)
                            ->columnSpanFull(),

                        Textarea::make('review_text')
                            ->label('Full Review')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),

                        Textarea::make('pros')
                            ->label('Pros')
                            ->default(null)
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('cons')
                            ->label('Cons')
                            ->default(null)
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('reason_not_chosen')
                            ->label('Why Other Colleges Were Not Chosen')
                            ->default(null)
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('other_colleges')
                            ->label('Other Colleges Considered')
                            ->default(null)
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                // 5. Fees, Hostel and Placements
                Section::make('Fees, Hostel & Placements')
                    ->description('Financial details and campus facilities.')
                    ->icon('heroicon-o-banknotes')
                    ->columns(2)
                    ->schema([
                        TextInput::make('course_fees')
                            ->label('Course Fees')
                            ->numeric()
                            ->default(null),

                        TextInput::make('hostel')
                            ->label('Hostel Available')
                            ->default(null),

                        TextInput::make('hostel_fees')
                            ->label('Hostel Fees')
                            ->numeric()
                            ->default(null),

                        TextInput::make('placements')
                            ->label('Placement Information')
                            ->default(null),

                        TextInput::make('average_package')
                            ->label('Average Package')
                            ->numeric()
                            ->default(null),

                        TextInput::make('internships')
                            ->label('Internship Information')
                            ->default(null),
                    ])
                    ->columnSpanFull(),

                // 6. Review Status
                Section::make('Review Moderation')
                    ->description('Control whether the review is pending, approved, or rejected.')
                    ->icon('heroicon-o-shield-check')
                    ->schema([
                        Select::make('status')
                            ->label('Review Status')
                            ->options([
                                'pending' => '🟠 Pending',
                                'approved' => '🟢 Approved',
                                'rejected' => '🔴 Rejected',
                            ])
                            ->default('pending')
                            ->required()
                            ->native(false)
                            ->selectablePlaceholder(false),
                    ])
                    ->columnSpanFull(),

                // 7. Additional Submitted Data
                Section::make('Additional Form Data')
                    ->description('Original form data submitted by the student.')
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        Textarea::make('form_details')
                            ->label('Form Details (JSON)')
                            ->default(null)
                            ->rows(6)
                            ->columnSpanFull(),
                    ])
                    ->collapsed()
                    ->columnSpanFull(),

            ]);
    }
}
