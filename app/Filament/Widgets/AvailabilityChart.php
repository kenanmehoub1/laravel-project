<?php

namespace App\Filament\Widgets;

use App\Models\Property;
use Filament\Widgets\ChartWidget;

class AvailabilityChart extends ChartWidget
{
    protected ?string $heading = 'حالة توفر العقارات';
    
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $available = Property::where('is_available', true)->count();
        $unavailable = Property::where('is_available', false)->count();

        return [
            'datasets' => [
                [
                    'label' => 'عدد العقارات',
                    'data' => [$available, $unavailable],
                    'backgroundColor' => ['#22C55E', '#EF4444'],
                    'borderColor' => ['#22C55E', '#EF4444'],
                ],
            ],
            'labels' => ['متاح ✅', 'غير متاح ❌'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}