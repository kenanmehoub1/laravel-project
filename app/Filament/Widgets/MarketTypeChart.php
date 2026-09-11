<?php

namespace App\Filament\Widgets;

use App\Models\Property;
use Filament\Widgets\ChartWidget;

class MarketTypeChart extends ChartWidget
{
    protected ?string $heading = 'توزيع العقارات حسب نوع السوق'; // ✅ بدون static
    
    protected static ?int $sort = 1; // ✅ مع static

    protected function getData(): array
    {
        $data = Property::query()
            ->selectRaw('market_type, COUNT(*) as count')
            ->whereNotNull('market_type')
            ->groupBy('market_type')
            ->get();

        $labels = $data->map(function ($item) {
            return $item->market_type == 'primary' ? ' primary Market ' : 'secondary Market ';
        })->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'عدد العقارات',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => ['#36A2EB', '#FF6384'],
                    'borderColor' => ['#36A2EB', '#FF6384'],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}