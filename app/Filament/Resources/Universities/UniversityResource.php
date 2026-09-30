<?php

namespace App\Filament\Resources\Universities;

use App\Filament\Resources\Universities\Pages\CreateUniversity;
use App\Filament\Resources\Universities\Pages\EditUniversity;
use App\Filament\Resources\Universities\Pages\ListUniversities;
use App\Filament\Resources\Universities\Schemas\UniversityForm;
use App\Filament\Resources\Universities\Tables\UniversitiesTable;
use App\Filament\Resources\Universities\RelationManagers\CoursesRelationManager;
use App\Filament\Resources\Universities\RelationManagers\AccreditationsRelationManager;
use App\Filament\Resources\Universities\RelationManagers\ScholarshipsRelationManager;
use App\Filament\Resources\Universities\RelationManagers\FaqsRelationManager;
use App\Filament\Resources\Universities\RelationManagers\ReviewsRelationManager;
use App\Filament\Resources\Universities\RelationManagers\PlacementsRelationManager;
use App\Filament\Resources\Universities\RelationManagers\RecruitersRelationManager;
use App\Filament\Resources\Universities\RelationManagers\FacilitiesRelationManager;
use App\Filament\Resources\Universities\RelationManagers\AdmissionsRelationManager;
use App\Models\University;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UniversityResource extends Resource
{
    protected static ?string $model = University::class;

    protected static string | UnitEnum | null $navigationGroup = 'Universities';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingLibrary;

    public static function form(Schema $schema): Schema
    {
        return UniversityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UniversitiesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            CoursesRelationManager::class,
            AccreditationsRelationManager::class,
            ScholarshipsRelationManager::class,
            FaqsRelationManager::class,
            ReviewsRelationManager::class,
            PlacementsRelationManager::class,
            RecruitersRelationManager::class,
            FacilitiesRelationManager::class,
            AdmissionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUniversities::route('/'),
            'create' => CreateUniversity::route('/create'),
            'edit' => EditUniversity::route('/{record}/edit'),
        ];
    }
}
