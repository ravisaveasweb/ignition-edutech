<?php

namespace App\Filament\Resources\StudyAbroadEnquiries\Pages;

use App\Filament\Resources\StudyAbroadEnquiries\StudyAbroadEnquiryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStudyAbroadEnquiry extends EditRecord
{
    protected static string $resource = StudyAbroadEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
