<?php

namespace App\Filament\Resources\StudyIndiaReviews;

use App\Filament\Resources\StudyIndiaReviews\Pages\CreateStudyIndiaReview;
use App\Filament\Resources\StudyIndiaReviews\Pages\EditStudyIndiaReview;
use App\Filament\Resources\StudyIndiaReviews\Pages\ListStudyIndiaReviews;
use App\Filament\Resources\StudyIndiaReviews\Schemas\StudyIndiaReviewForm;
use App\Filament\Resources\StudyIndiaReviews\Tables\StudyIndiaReviewsTable;
use App\Models\StudyIndiaReview;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudyIndiaReviewResource extends Resource
{
    protected static ?string $model = StudyIndiaReview::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'college_name';

    protected static string|\UnitEnum|null $navigationGroup = 'Admissions';

    protected static ?string $navigationLabel = 'Study India Reviews';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return StudyIndiaReviewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudyIndiaReviewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudyIndiaReviews::route('/'),
            'create' => CreateStudyIndiaReview::route('/create'),
            'edit' => EditStudyIndiaReview::route('/{record}/edit'),
        ];
    }
}
