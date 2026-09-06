<?php

namespace App\Filament\Resources\Properties\Widgets;

use Filament\Widgets\ChartWidget;

class CustomerOverview extends ChartWidget
{
    protected ?string $heading = 'Customer Overview';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
