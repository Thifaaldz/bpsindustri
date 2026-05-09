<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class IbsLineChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Pertumbuhan Indeks Produksi';
    protected static ?string $maxHeight = '250px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Indeks Produksi',
                    'data' => [10, 22, 15, 28, 20, 35],
                    'borderColor' => '#F57C00',
                    'fill' => false,
                ]
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
