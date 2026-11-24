<?php

namespace App\Filament\Resources\StudyAbroadReviews\Pages;

use App\Filament\Resources\StudyAbroadReviews\StudyAbroadReviewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudyAbroadReview extends EditRecord
{
    protected static string $resource = StudyAbroadReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
