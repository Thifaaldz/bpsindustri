<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class IbsBarChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Industri Per Provinsi';
    protected static ?string $maxHeight = '250px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Industri',
                    'data' => [120, 80, 150, 90, 200, 100],
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
