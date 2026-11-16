<?php

namespace App\Filament\Resources\StudyIndiaEnquiries\Pages;

use App\Filament\Resources\StudyIndiaEnquiries\StudyIndiaEnquiryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudyIndiaEnquiries extends ListRecords
{
    protected static string $resource = StudyIndiaEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
