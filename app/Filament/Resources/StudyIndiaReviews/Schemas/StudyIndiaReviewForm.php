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
                    ->description('Personal details and student contact information.')
                    ->icon('heroicon-o-user-circle')
                    ->iconColor('info')
                    ->columns(2)
                    ->schema([
                        TextInput::make('study_india_user_id')
                            ->label('Student Account ID')
                            ->prefixIcon('heroicon-m-identification')
                            ->prefixIconColor('primary')
                            ->numeric()
                            ->required(),

                        TextInput::make('student_name')
                            ->label('Student Name')
                            ->prefixIcon('heroicon-m-user')
                            ->prefixIconColor('primary')
                            ->maxLength(255)
                            ->default(null),

                        TextInput::make('email')
                            ->label('Email Address')
                            ->prefixIcon('heroicon-m-envelope')
                            ->prefixIconColor('info')
                            ->email()
                            ->maxLength(255)
                            ->default(null),

                        TextInput::make('country_code')
                            ->label('Country Code')
                            ->prefixIcon('heroicon-m-globe-alt')
                            ->prefixIconColor('info')
                            ->default(null),

                        TextInput::make('mobile')
                            ->label('Mobile Number')
                            ->prefixIcon('heroicon-m-phone')
                            ->prefixIconColor('success')
                            ->tel()
                            ->default(null),

                        TextInput::make('gender')
                            ->label('Gender')
                            ->prefixIcon('heroicon-m-user')
                            ->prefixIconColor('primary')
                            ->default(null),

                        TextInput::make('linkedin')
                            ->label('LinkedIn Profile')
                            ->prefixIcon('heroicon-m-link')
                            ->prefixIconColor('info')
                            ->url()
                            ->default(null),

                        TextInput::make('referral_code')
                            ->label('Referral Code')
                            ->prefixIcon('heroicon-m-ticket')
                            ->prefixIconColor('warning')
                            ->default(null),
                    ])
                    ->columnSpanFull(),

                // 2. College and Course Details
                Section::make('College & Course Details')
                    ->description('College selection, course, and admission information.')
                    ->icon('heroicon-o-academic-cap')
                    ->iconColor('primary')
                    ->columns(2)
                    ->schema([
                        TextInput::make('college_name')
                            ->label('College Name')
                            ->prefixIcon('heroicon-m-building-library')
                            ->prefixIconColor('primary')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('college_display_name')
                            ->label('College Display Name')
                            ->prefixIcon('heroicon-m-building-office-2')
                            ->prefixIconColor('primary')
                            ->default(null),

                        TextInput::make('course')
                            ->label('Course')
                            ->prefixIcon('heroicon-m-academic-cap')
                            ->prefixIconColor('primary')
                            ->required(),

                        TextInput::make('graduation_year')
                            ->label('Admission / Graduation Year')
                            ->prefixIcon('heroicon-m-calendar')
                            ->prefixIconColor('info')
                            ->numeric()
                            ->default(null),

                        TextInput::make('class_size')
                            ->label('Class Size')
                            ->prefixIcon('heroicon-m-user-group')
                            ->prefixIconColor('info')
                            ->numeric()
                            ->default(null),

                        TextInput::make('reservation')
                            ->label('Reservation Applicable')
                            ->prefixIcon('heroicon-m-clipboard-document-check')
                            ->prefixIconColor('warning')
                            ->default(null),

                        TextInput::make('reservation_type')
                            ->label('Reservation Category')
                            ->prefixIcon('heroicon-m-tag')
                            ->prefixIconColor('warning')
                            ->default(null),

                        TextInput::make('gdpi')
                            ->label('GD/PI')
                            ->prefixIcon('heroicon-m-chat-bubble-left-right')
                            ->prefixIconColor('info')
                            ->default(null),
                    ])
                    ->columnSpanFull(),

                // 3. Academic Information
                Section::make('Academic Information')
                    ->description('Previous education details and academic scores.')
                    ->icon('heroicon-o-book-open')
                    ->iconColor('success')
                    ->columns(2)
                    ->schema([
                        TextInput::make('board_10')
                            ->label('Class 10 Board')
                            ->prefixIcon('heroicon-m-book-open')
                            ->prefixIconColor('primary')
                            ->default(null),

                        TextInput::make('score_10')
                            ->label('Class 10 Score')
                            ->prefixIcon('heroicon-m-chart-bar')
                            ->prefixIconColor('success')
                            ->numeric()
                            ->default(null),

                        TextInput::make('score_type_10')
                            ->label('Class 10 Score Type')
                            ->prefixIcon('heroicon-m-document-text')
                            ->prefixIconColor('gray')
                            ->default(null),

                        TextInput::make('board_12')
                            ->label('Class 12 Board')
                            ->prefixIcon('heroicon-m-book-open')
                            ->prefixIconColor('primary')
                            ->default(null),

                        TextInput::make('score_12')
                            ->label('Class 12 Score')
                            ->prefixIcon('heroicon-m-chart-bar')
                            ->prefixIconColor('success')
                            ->numeric()
                            ->default(null),

                        TextInput::make('score_type_12')
                            ->label('Class 12 Score Type')
                            ->prefixIcon('heroicon-m-document-text')
                            ->prefixIconColor('gray')
                            ->default(null),

                        TextInput::make('graduation_course')
                            ->label('Graduation Course')
                            ->prefixIcon('heroicon-m-academic-cap')
                            ->prefixIconColor('primary')
                            ->default(null),

                        TextInput::make('graduation_score')
                            ->label('Graduation Score')
                            ->prefixIcon('heroicon-m-chart-bar')
                            ->prefixIconColor('success')
                            ->numeric()
                            ->default(null),

                        TextInput::make('graduation_score_type')
                            ->label('Graduation Score Type')
                            ->prefixIcon('heroicon-m-document-text')
                            ->prefixIconColor('gray')
                            ->default(null),
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->columnSpanFull(),

                // 4. Ratings and Review Content
                Section::make('Ratings & Review Content')
                    ->description('Review ratings, student feedback, advantages, and disadvantages.')
                    ->icon('heroicon-o-star')
                    ->iconColor('warning')
                    ->columns(2)
                    ->schema([
                        TextInput::make('overall_rating')
                            ->label('Overall Rating')
                            ->prefixIcon('heroicon-s-star')
                            ->prefixIconColor('warning')
                            ->suffix('/ 5')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->required()
                            ->helperText('Enter a rating from 1 to 5.'),

                        TextInput::make('academics_rating')
                            ->label('Academics Rating')
                            ->prefixIcon('heroicon-s-star')
                            ->prefixIconColor('warning')
                            ->suffix('/ 5')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->default(null),

                        TextInput::make('faculty_rating')
                            ->label('Faculty Rating')
                            ->prefixIcon('heroicon-s-star')
                            ->prefixIconColor('warning')
                            ->suffix('/ 5')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->default(null),

                        TextInput::make('placements_rating')
                            ->label('Placements Rating')
                            ->prefixIcon('heroicon-s-star')
                            ->prefixIconColor('warning')
                            ->suffix('/ 5')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->default(null),

                        TextInput::make('infrastructure_rating')
                            ->label('Infrastructure Rating')
                            ->prefixIcon('heroicon-s-star')
                            ->prefixIconColor('warning')
                            ->suffix('/ 5')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->default(null),

                        TextInput::make('campus_life_rating')
                            ->label('Campus Life Rating')
                            ->prefixIcon('heroicon-s-star')
                            ->prefixIconColor('warning')
                            ->suffix('/ 5')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(5)
                            ->step(0.1)
                            ->default(null),

                        TextInput::make('review_title')
                            ->label('Review Title')
                            ->prefixIcon('heroicon-m-chat-bubble-left')
                            ->prefixIconColor('info')
                            ->maxLength(255)
                            ->default(null)
                            ->columnSpanFull(),

                        Textarea::make('review_text')
                            ->label('Full Review')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull(),

                        Textarea::make('pros')
                            ->label('Pros')
                            ->rows(3)
                            ->default(null)
                            ->columnSpanFull(),

                        Textarea::make('cons')
                            ->label('Cons')
                            ->rows(3)
                            ->default(null)
                            ->columnSpanFull(),

                        Textarea::make('reason_not_chosen')
                            ->label('Why Other Colleges Were Not Chosen')
                            ->rows(3)
                            ->default(null)
                            ->columnSpanFull(),

                        Textarea::make('other_colleges')
                            ->label('Other Colleges Considered')
                            ->rows(3)
                            ->default(null)
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                // 5. Fees, Hostel and Placements
                Section::make('Fees, Hostel & Placements')
                    ->description('Course expenses, accommodation, and placement information.')
                    ->icon('heroicon-o-banknotes')
                    ->iconColor('success')
                    ->columns(2)
                    ->schema([
                        TextInput::make('course_fees')
                            ->label('Course Fees')
                            ->prefixIcon('heroicon-m-currency-rupee')
                            ->prefixIconColor('success')
                            ->numeric()
                            ->default(null),

                        TextInput::make('hostel')
                            ->label('Hostel Available')
                            ->prefixIcon('heroicon-m-home')
                            ->prefixIconColor('info')
                            ->default(null),

                        TextInput::make('hostel_fees')
                            ->label('Hostel Fees')
                            ->prefixIcon('heroicon-m-currency-rupee')
                            ->prefixIconColor('success')
                            ->numeric()
                            ->default(null),

                        TextInput::make('placements')
                            ->label('Placement Information')
                            ->prefixIcon('heroicon-m-briefcase')
                            ->prefixIconColor('primary')
                            ->default(null),

                        TextInput::make('average_package')
                            ->label('Average Package')
                            ->prefixIcon('heroicon-m-banknotes')
                            ->prefixIconColor('success')
                            ->numeric()
                            ->default(null),

                        TextInput::make('internships')
                            ->label('Internship Information')
                            ->prefixIcon('heroicon-m-academic-cap')
                            ->prefixIconColor('primary')
                            ->default(null),
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->columnSpanFull(),

                // 6. Review Moderation
                Section::make('Review Moderation')
                    ->description('Manage the publication status of this review.')
                    ->icon('heroicon-o-shield-check')
                    ->iconColor('danger')
                    ->columns(1)
                    ->schema([
                        Select::make('status')
                            ->label('Review Status')
                            ->options([
                                'pending' => '🟠 Pending Review',
                                'approved' => '🟢 Approved',
                                'rejected' => '🔴 Rejected',
                            ])
                            ->default('pending')
                            ->required()
                            ->native(false)
                            ->selectablePlaceholder(false)
                            ->helperText('Only approved reviews should be published on the website.'),
                    ])
                    ->columnSpanFull(),

                // 7. Additional Submitted Data
                Section::make('Additional Form Data')
                    ->description('Original form data submitted by the student in JSON format.')
                    ->icon('heroicon-o-document-text')
                    ->iconColor('gray')
                    ->schema([
                        Textarea::make('form_details')
                            ->label('Form Details (JSON)')
                            ->rows(6)
                            ->default(null)
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->columnSpanFull(),

            ]);
    }
}
