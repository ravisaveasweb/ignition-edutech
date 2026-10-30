<?php

namespace App\Filament\Resources\StudyAbroadReviews;

use App\Filament\Resources\StudyAbroadReviews\Pages\CreateStudyAbroadReview;
use App\Filament\Resources\StudyAbroadReviews\Pages\EditStudyAbroadReview;
use App\Filament\Resources\StudyAbroadReviews\Pages\ListStudyAbroadReviews;
use App\Filament\Resources\StudyAbroadReviews\Schemas\StudyAbroadReviewForm;
use App\Filament\Resources\StudyAbroadReviews\Tables\StudyAbroadReviewsTable;
use App\Models\StudyAbroadReview;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudyAbroadReviewResource extends Resource
{
    protected static ?string $model = StudyAbroadReview::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'university_name';

    protected static string|\UnitEnum|null $navigationGroup = 'Admissions';

    protected static ?string $navigationLabel = 'Study Abroad Reviews';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return StudyAbroadReviewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudyAbroadReviewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudyAbroadReviews::route('/'),
            'create' => CreateStudyAbroadReview::route('/create'),
            'edit' => EditStudyAbroadReview::route('/{record}/edit'),
        ];
    }
}
