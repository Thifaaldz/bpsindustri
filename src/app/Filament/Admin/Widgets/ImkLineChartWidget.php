<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class ImkLineChartWidget extends ChartWidget
{
    protected static string $view = 'filament.admin.widgets.imk-line-chart-widget';
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'QtoQ',
                    'data' => [5, 10, 8, 15],
                    'borderColor' => '#F57C00',
                    'fill' => false,
                ],
                [
                    'label' => 'YonY',
                    'data' => [12, 18, 14, 20],
                    'borderColor' => '#FFCA28',
                    'fill' => false,
                ]
            ],
            'labels' => ['Q1', 'Q2', 'Q3', 'Q4'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
