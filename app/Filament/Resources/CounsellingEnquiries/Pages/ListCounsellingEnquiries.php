<?php

namespace App\Filament\Resources\CounsellingEnquiries\Pages;

use App\Filament\Resources\CounsellingEnquiries\CounsellingEnquiryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCounsellingEnquiries extends ListRecords
{
    protected static string $resource = CounsellingEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
