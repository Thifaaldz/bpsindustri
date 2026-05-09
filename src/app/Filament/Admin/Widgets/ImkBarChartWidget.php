<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class ImkBarChartWidget extends ChartWidget
{
    protected static string $view = 'filament.admin.widgets.imk-bar-chart-widget';
    protected static ?string $maxHeight = '250px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Usaha',
                    'data' => [150, 100, 180, 120, 250, 140],
                    'backgroundColor' => '#F57C00',
                ]
            ],
            'labels' => ['Aceh', 'Sumut', 'Sumbar', 'Riau', 'Jambi', 'Sumsel'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
