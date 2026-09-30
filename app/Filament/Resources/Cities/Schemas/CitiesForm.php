<?php

namespace App\Filament\Resources\Cities\Schemas;

use App\Models\State;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CitiesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('state_id')
                    ->label('State')
                    ->options(State::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                TextInput::make('name')
                    ->label('City')
                    ->required(),
            ]);
    }
}