<?php

namespace App\Filament\Resources\SuccessStoryReviews\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SuccessStoryReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Student Details')
                    ->schema([
                        TextInput::make('student_name')
                            ->label('Student Name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('course_name')
                            ->label('Course')
                            ->maxLength(255),

                        TextInput::make('college_name')
                            ->label('College / University')
                            ->maxLength(255),

                        FileUpload::make('student_image')
                            ->label('Student Image')
                            ->image()
                            ->directory('success-story-reviews')
                            ->imageEditor(),
                    ])
                    ->columns(2),

                Section::make('Review')
                    ->schema([
                        Select::make('review_type')
                            ->label('Type')
                            ->options([
                                'review' => 'Student Review',
                                'testimonial' => 'Testimonial',
                            ])
                            ->required()
                            ->default('review'),

                        Textarea::make('review')
                            ->label('Review / Testimonial')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull(),

                        TextInput::make('rating')
                            ->label('Rating')
                            ->numeric()
                            ->required()
                            ->default(5.0)
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1),
                    ])
                    ->columns(2),

                Section::make('Publishing')
                    ->schema([
                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->required()
                            ->default(0)
                            ->minValue(0),

                        Toggle::make('is_approved')
                            ->label('Approved')
                            ->default(false),

                        Toggle::make('status')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}