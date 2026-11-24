<?php

namespace App\Filament\Resources\SuccessStories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class SuccessStoryForm
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

                        TextInput::make('college_name')
                            ->label('College / University')
                            ->maxLength(255),

                        TextInput::make('course_name')
                            ->label('Course')
                            ->maxLength(255),

                        TextInput::make('country')
                            ->label('Country')
                            ->maxLength(255),

                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'study-abroad' => 'Study Abroad',
                                'study-india' => 'Study India',
                            ])
                            ->required()
                            ->default('study-abroad'),

                        FileUpload::make('student_image')
                            ->label('Student Image')
                            ->image()
                            ->directory('success-stories/students')
                            ->imageEditor(),
                    ])
                    ->columns(2),

                Section::make('Story Content')
                    ->schema([
                        FileUpload::make('banner_image')
                            ->label('Banner Image')
                            ->image()
                            ->directory('success-stories/banners')
                            ->imageEditor()
                            ->columnSpanFull(),

                        Textarea::make('short_description')
                            ->label('Short Description')
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull(),

                        Textarea::make('story_content')
                            ->label('Full Story')
                            ->rows(8)
                            ->columnSpanFull(),
                    ]),

                Section::make('Career Details')
                    ->schema([
                        TextInput::make('designation')
                            ->label('Designation')
                            ->maxLength(255),

                        TextInput::make('company_name')
                            ->label('Company Name')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Publishing')
                    ->schema([
                        TextInput::make('rating')
                            ->label('Rating')
                            ->numeric()
                            ->required()
                            ->default(5.0)
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->required()
                            ->default(0)
                            ->minValue(0),

                        Toggle::make('is_featured')
                            ->label('Featured Story')
                            ->default(false),

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
