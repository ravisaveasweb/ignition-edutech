<?php

namespace App\Filament\Resources\SuccessStoryReviews\Pages;

use App\Filament\Resources\SuccessStoryReviews\SuccessStoryReviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuccessStoryReviews extends ListRecords
{
    protected static string $resource = SuccessStoryReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
