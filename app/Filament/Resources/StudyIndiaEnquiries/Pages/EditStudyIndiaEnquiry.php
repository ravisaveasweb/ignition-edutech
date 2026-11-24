<?php

namespace App\Filament\Resources\StudyIndiaEnquiries\Pages;

use App\Filament\Resources\StudyIndiaEnquiries\StudyIndiaEnquiryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStudyIndiaEnquiry extends EditRecord
{
    protected static string $resource = StudyIndiaEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
