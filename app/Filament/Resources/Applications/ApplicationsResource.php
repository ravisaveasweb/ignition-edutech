<?php

namespace App\Filament\Resources\Applications;

use App\Filament\Resources\Applications\Pages\CreateApplications;
use App\Filament\Resources\Applications\Pages\EditApplications;
use App\Filament\Resources\Applications\Pages\ListApplications;
use App\Filament\Resources\Applications\Schemas\ApplicationsForm;
use App\Filament\Resources\Applications\Tables\ApplicationsTable;
use App\Models\Application;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ApplicationsResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static string | UnitEnum | null $navigationGroup = 'Admissions';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ApplicationsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApplicationsTable::configure($table);
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
            'index' => ListApplications::route('/'),
            'create' => CreateApplications::route('/create'),
            'edit' => EditApplications::route('/{record}/edit'),
        ];
    }

}
