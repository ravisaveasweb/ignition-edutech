<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class EnquiryTrendsChart extends ChartWidget
{
    protected ?string $heading = 'Enquiry Trends - Last 7 Days';
    protected int|string|array $columnSpan = 'full';
    

    protected function getData(): array
    {
        $startDate = now()->subDays(6)->startOfDay();

        $enquiries = Enquiry::query()
            ->selectRaw('DATE(created_at) as enquiry_date, COUNT(*) as total')
            ->whereBetween('created_at', [$startDate, now()->endOfDay()])
            ->groupBy('enquiry_date')
            ->pluck('total', 'enquiry_date');

        $labels = [];
        $data = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $key = $date->toDateString();

            $labels[] = $date->format('D');
            $data[] = (int) ($enquiries[$key] ?? 0);
        }

        return [
            'datasets' => [
                [
                    'label' => 'Enquiries',
                    'data' => $data,
                    'borderColor' => '#eb933a',
                    'backgroundColor' => 'rgba(235, 147, 58, 0.15)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
