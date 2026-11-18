<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use Filament\Widgets\ChartWidget;

class EnquiryDistributionChart extends ChartWidget
{
    protected ?string $heading = 'Enquiry Category Distribution';
    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $categories = [
            'Study India',
            'Study Abroad',
            'Counselling',
        ];

        $counts = [];

        foreach ($categories as $category) {
            $counts[] = Enquiry::where('enquiry_type', $category)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Enquiries',
                    'data' => $counts,
                    'backgroundColor' => [
                        '#0a2540',
                        '#eb933a',
                        '#3b82f6',
                    ],
                ],
            ],
            'labels' => $categories,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
