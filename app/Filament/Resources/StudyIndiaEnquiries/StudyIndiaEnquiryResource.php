<?php

namespace App\Filament\Resources\StudyIndiaEnquiries;

use App\Filament\Resources\StudyIndiaEnquiries\Pages\CreateStudyIndiaEnquiry;
use App\Filament\Resources\StudyIndiaEnquiries\Pages\EditStudyIndiaEnquiry;
use App\Filament\Resources\StudyIndiaEnquiries\Pages\ListStudyIndiaEnquiries;
use App\Filament\Resources\StudyIndiaEnquiries\Pages\ViewStudyIndiaEnquiry;
use App\Filament\Resources\StudyIndiaEnquiries\Schemas\StudyIndiaEnquiryForm;
use App\Filament\Resources\StudyIndiaEnquiries\Schemas\StudyIndiaEnquiryInfolist;
use App\Filament\Resources\StudyIndiaEnquiries\Tables\StudyIndiaEnquiriesTable;
use App\Models\Enquiry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StudyIndiaEnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Study India Enquiries';

    protected static UnitEnum|string|null $navigationGroup = 'Enquiries';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return StudyIndiaEnquiryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StudyIndiaEnquiryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudyIndiaEnquiriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudyIndiaEnquiries::route('/'),
            'create' => CreateStudyIndiaEnquiry::route('/create'),
            'view' => ViewStudyIndiaEnquiry::route('/{record}'),
            'edit' => EditStudyIndiaEnquiry::route('/{record}/edit'),
        ];
    }
}