<?php

namespace App\Filament\Resources\CounsellingEnquiries;

use App\Filament\Resources\CounsellingEnquiries\Pages\CreateCounsellingEnquiry;
use App\Filament\Resources\CounsellingEnquiries\Pages\EditCounsellingEnquiry;
use App\Filament\Resources\CounsellingEnquiries\Pages\ListCounsellingEnquiries;
use App\Filament\Resources\CounsellingEnquiries\Pages\ViewCounsellingEnquiry;
use App\Filament\Resources\CounsellingEnquiries\Schemas\CounsellingEnquiryForm;
use App\Filament\Resources\CounsellingEnquiries\Schemas\CounsellingEnquiryInfolist;
use App\Filament\Resources\CounsellingEnquiries\Tables\CounsellingEnquiriesTable;
use App\Models\Enquiry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CounsellingEnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInbox;

    protected static ?string $navigationLabel = 'Counselling Enquiries';

    protected static UnitEnum|string|null $navigationGroup = 'Enquiries';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CounsellingEnquiryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CounsellingEnquiryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CounsellingEnquiriesTable::configure($table);
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
            'index' => ListCounsellingEnquiries::route('/'),
            'create' => CreateCounsellingEnquiry::route('/create'),
            'view' => ViewCounsellingEnquiry::route('/{record}'),
            'edit' => EditCounsellingEnquiry::route('/{record}/edit'),
        ];
    }
}
