<?php

namespace App\Filament\Resources\StudyIndiaReviews\Pages;

use App\Filament\Resources\StudyIndiaReviews\StudyIndiaReviewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudyIndiaReview extends EditRecord
{
    protected static string $resource = StudyIndiaReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
