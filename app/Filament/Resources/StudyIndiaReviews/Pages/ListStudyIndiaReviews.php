<?php

namespace App\Filament\Resources\StudyIndiaReviews\Pages;

use App\Filament\Resources\StudyIndiaReviews\StudyIndiaReviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\StudyIndiaReviewStats;

class ListStudyIndiaReviews extends ListRecords
{
    protected static string $resource = StudyIndiaReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
{
    return [
        StudyIndiaReviewStats::class,
    ];
}
}
