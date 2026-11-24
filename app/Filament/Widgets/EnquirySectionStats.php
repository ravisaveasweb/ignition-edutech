<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EnquirySectionStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Study India',
                number_format(Enquiry::where('enquiry_type', 'Study India')->count())
            )
                ->description('Study India enquiries')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('success'),

            Stat::make(
                'Study Abroad',
                number_format(Enquiry::where('enquiry_type', 'Study Abroad')->count())
            )
                ->description('Study Abroad enquiries')
                ->descriptionIcon('heroicon-m-globe-alt')
                ->color('info'),

            Stat::make(
                'Counselling',
                number_format(Enquiry::where('enquiry_type', 'Counselling')->count())
            )
                ->description('Counselling enquiries')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('warning'),
        ];
    }
}
