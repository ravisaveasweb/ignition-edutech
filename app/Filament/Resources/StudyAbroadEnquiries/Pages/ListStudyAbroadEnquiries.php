<?php

namespace App\Filament\Resources\StudyAbroadEnquiries\Pages;

use App\Filament\Resources\StudyAbroadEnquiries\StudyAbroadEnquiryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudyAbroadEnquiries extends ListRecords
{
    protected static string $resource = StudyAbroadEnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
