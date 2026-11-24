<?php

namespace App\Filament\Resources\StudyAbroadReviews\Pages;

use App\Filament\Resources\StudyAbroadReviews\StudyAbroadReviewResource;
use App\Filament\Widgets\StudyAbroadReviewStats;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudyAbroadReviews extends ListRecords
{
    protected static string $resource = StudyAbroadReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StudyAbroadReviewStats::class,
        ];
    }
}
