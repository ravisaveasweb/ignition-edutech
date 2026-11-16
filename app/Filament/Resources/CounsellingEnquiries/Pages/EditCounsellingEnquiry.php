<?php

namespace App\Filament\Resources\CounsellingEnquiries\Pages;

use App\Filament\Resources\CounsellingEnquiries\CounsellingEnquiryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCounsellingEnquiry extends EditRecord
{
    protected static string $resource = CounsellingEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
