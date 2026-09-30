<?php

namespace App\Filament\Resources\States;

use App\Filament\Resources\States\Pages\CreateStates;
use App\Filament\Resources\States\Pages\EditStates;
use App\Filament\Resources\States\Pages\ListStates;
use App\Filament\Resources\States\Schemas\StatesForm;
use App\Filament\Resources\States\Tables\StatesTable;
use App\Models\State;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StatesResource extends Resource
{
    protected static ?string $model = State::class;

    protected static string | UnitEnum | null $navigationGroup = 'Geography';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Map;

    public static function form(Schema $schema): Schema
    {
        return StatesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStates::route('/'),
            'create' => CreateStates::route('/create'),
            'edit' => EditStates::route('/{record}/edit'),
        ];
    }
}
