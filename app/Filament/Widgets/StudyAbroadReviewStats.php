<?php

namespace App\Filament\Widgets;

use App\Models\StudyAbroadReview;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StudyAbroadReviewStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $query = StudyAbroadReview::query();

        return [
            // TOTAL REVIEWS
            Stat::make(
                'Total Reviews',
                (clone $query)->count()
            )
                ->description('All submitted reviews')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->color('primary'),

            // PENDING REVIEWS
            Stat::make(
                'Pending Reviews',
                (clone $query)->where('status', 'pending')->count()
            )
                ->description('Waiting for approval')
                ->descriptionIcon('heroicon-m-clock')
                ->icon('heroicon-o-clock')
                ->color('warning'),

            // APPROVED REVIEWS
            Stat::make(
                'Approved Reviews',
                (clone $query)->where('status', 'approved')->count()
            )
                ->description('Published reviews')
                ->descriptionIcon('heroicon-m-clock')
                ->descriptionIcon('heroicon-m-check-circle')->color('success'),

            // REJECTED REVIEWS
            Stat::make(
                'Rejected Reviews',
                (clone $query)->where('status', 'rejected')->count()
            )
                ->description('Rejected submissions')
                ->descriptionIcon('heroicon-m-x-circle')
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
