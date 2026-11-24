<?php

namespace App\Filament\Resources\CounsellingEnquiries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CounsellingEnquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Student Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('mobile')
                    ->label('Mobile Number')
                    ->required()
                    ->maxLength(20),

                TextInput::make('program')
                    ->label('Interested Program')
                    ->maxLength(255),

                TextInput::make('source')
                    ->label('Enquiry Source')
                    ->default('Counselling')
                    ->disabled(),
            ]);
    }
}