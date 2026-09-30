<?php

namespace App\Filament\Resources\Courses\Schemas;

use App\Models\Course;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Course Information')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn($state, $set) => $set('slug', Str::slug($state))
                        ),

                    TextInput::make('slug')
                        ->required()
                        ->unique(Course::class, 'slug', ignoreRecord: true),

                    Select::make('degree')
                        ->options([
                            'MBA' => 'MBA',
                            'BBA' => 'BBA',
                            'MCA' => 'MCA',
                            'BCA' => 'BCA',
                            'M.Com' => 'M.Com',
                            'MA' => 'MA',
                            'Other' => 'Other',
                        ])
                        ->searchable(),

                    TextInput::make('duration')
                        ->numeric()
                        ->minValue(1),

                    Select::make('duration_type')
                        ->options([
                            'Months' => 'Months',
                            'Years' => 'Years',
                        ]),

                    TextInput::make('fees')
                        ->numeric()
                        ->prefix('₹'),

                    Textarea::make('eligibility')
                        ->rows(4)
                        ->columnSpanFull(),

                    Toggle::make('status')
                        ->default(true),
                ])
                ->columns(2),
        ]);
    }
}
