<?php

namespace App\Filament\Resources\SuccessStoryReviews;

use App\Filament\Resources\SuccessStoryReviews\Pages\CreateSuccessStoryReview;
use App\Filament\Resources\SuccessStoryReviews\Pages\EditSuccessStoryReview;
use App\Filament\Resources\SuccessStoryReviews\Pages\ListSuccessStoryReviews;
use App\Filament\Resources\SuccessStoryReviews\Schemas\SuccessStoryReviewForm;
use App\Filament\Resources\SuccessStoryReviews\Tables\SuccessStoryReviewsTable;
use App\Models\SuccessStoryReview;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SuccessStoryReviewResource extends Resource
{
    protected static ?string $model = SuccessStoryReview::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'student_name';

    protected static ?string $navigationLabel = 'Success Reviews ';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return SuccessStoryReviewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuccessStoryReviewsTable::configure($table);
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
            'index' => ListSuccessStoryReviews::route('/'),
            'create' => CreateSuccessStoryReview::route('/create'),
            'edit' => EditSuccessStoryReview::route('/{record}/edit'),
        ];
    }
}