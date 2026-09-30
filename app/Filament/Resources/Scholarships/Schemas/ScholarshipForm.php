<?php

namespace App\Filament\Resources\Scholarships\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ScholarshipForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                DatePicker::make('deadline')
                    ->required(),
            ]);
    }
}
