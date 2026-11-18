<?php

namespace App\Filament\Resources\Universities\Pages;

use App\Filament\Resources\Universities\UniversityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUniversities extends ListRecords
{
    protected static string $resource = UniversityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    

protected function getTableQuery(): Builder
{
    return parent::getTableQuery()
        ->whereIn('slug', [
            'nmims-cdoe',
            'vit',
            'amity-university-online',
            'manipal-online',
            'sikkim-manipal-university',
            'dy-patil-pune',
            'jain-online',
            'nl-dalmia-online',
            'vivekananda-global-university-online',
            'gla-university-online',
            'university-of-massachusetts-global-online',
            'bennett-university',
        ]);
}


}
