<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EnquiryStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $total = Enquiry::count();
        $today = Enquiry::whereDate('created_at', today())->count();

        return [
            Stat::make('Total Enquiries', number_format($total))
                ->description('All student enquiries')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),

            Stat::make("Today's Enquiries", number_format($today))
                ->description('Enquiries received today')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('success'),
        ];
    }
}
