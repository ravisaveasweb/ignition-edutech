<?php

namespace App\Filament\Resources\SuccessStoryReviews\Pages;

use App\Filament\Resources\SuccessStoryReviews\SuccessStoryReviewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSuccessStoryReview extends EditRecord
{
    protected static string $resource = SuccessStoryReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
