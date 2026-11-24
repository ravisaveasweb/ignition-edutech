<?php

namespace App\Filament\Resources\StudyAbroadEnquiries;

use App\Filament\Resources\StudyAbroadEnquiries\Pages\CreateStudyAbroadEnquiry;
use App\Filament\Resources\StudyAbroadEnquiries\Pages\EditStudyAbroadEnquiry;
use App\Filament\Resources\StudyAbroadEnquiries\Pages\ListStudyAbroadEnquiries;
use App\Filament\Resources\StudyAbroadEnquiries\Pages\ViewStudyAbroadEnquiry;
use App\Filament\Resources\StudyAbroadEnquiries\Schemas\StudyAbroadEnquiryForm;
use App\Filament\Resources\StudyAbroadEnquiries\Schemas\StudyAbroadEnquiryInfolist;
use App\Filament\Resources\StudyAbroadEnquiries\Tables\StudyAbroadEnquiriesTable;
use App\Models\Enquiry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StudyAbroadEnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Study Abroad Enquiries';

    protected static UnitEnum|string|null $navigationGroup = 'Enquiries';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return StudyAbroadEnquiryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StudyAbroadEnquiryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudyAbroadEnquiriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudyAbroadEnquiries::route('/'),
            'create' => CreateStudyAbroadEnquiry::route('/create'),
            'view' => ViewStudyAbroadEnquiry::route('/{record}'),
            'edit' => EditStudyAbroadEnquiry::route('/{record}/edit'),
        ];
    }
}
