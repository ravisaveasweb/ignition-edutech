<?php

namespace App\Filament\Resources\StudyIndiaEnquiries\Pages;

use App\Filament\Resources\StudyIndiaEnquiries\StudyIndiaEnquiryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStudyIndiaEnquiry extends ViewRecord
{
    protected static string $resource = StudyIndiaEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
