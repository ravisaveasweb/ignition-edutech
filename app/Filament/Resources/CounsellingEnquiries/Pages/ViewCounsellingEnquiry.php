<?php

namespace App\Filament\Resources\CounsellingEnquiries\Pages;

use App\Filament\Resources\CounsellingEnquiries\CounsellingEnquiryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCounsellingEnquiry extends ViewRecord
{
    protected static string $resource = CounsellingEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
