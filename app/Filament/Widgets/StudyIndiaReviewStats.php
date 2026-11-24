<?php

namespace App\Filament\Widgets;

use App\Models\StudyIndiaReview;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StudyIndiaReviewStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Reviews',
                StudyIndiaReview::count()
            )
                ->description('All submitted reviews')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->icon('heroicon-o-clipboard-document-list')
                ->color('primary'),

            Stat::make(
                'Pending Reviews',
                StudyIndiaReview::where('status', 'pending')->count()
            )
                ->description('Waiting for approval')
                ->descriptionIcon('heroicon-m-clock')
                ->icon('heroicon-o-clock')
                ->color('warning'),

            Stat::make(
                'Approved Reviews',
                StudyIndiaReview::where('status', 'approved')->count()
            )
                ->description('Published reviews')
                ->descriptionIcon('heroicon-m-check-circle')
                ->icon('heroicon-o-check-badge')
                ->color('success'),

            Stat::make(
                'Rejected Reviews',
                StudyIndiaReview::where('status', 'rejected')->count()
            )
                ->description('Rejected submissions')
                ->descriptionIcon('heroicon-m-x-circle')
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
