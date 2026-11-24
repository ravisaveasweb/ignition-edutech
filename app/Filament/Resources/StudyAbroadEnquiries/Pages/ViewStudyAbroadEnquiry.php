<?php

namespace App\Filament\Resources\StudyAbroadEnquiries\Pages;

use App\Filament\Resources\StudyAbroadEnquiries\StudyAbroadEnquiryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStudyAbroadEnquiry extends ViewRecord
{
    protected static string $resource = StudyAbroadEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
