<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class ImkSummaryWidget extends Widget
{
    protected static string $view = 'filament.admin.widgets.imk-summary-widget';
    protected int | string | array $columnSpan = 1;

    public function getSummaryData(): array
    {
        return [
            ['label' => 'Jumlah Usaha', 'value' => '1.204', 'unit' => 'Unit Usaha', 'icon' => 'heroicon-o-building-storefront'],
            ['label' => 'Jumlah Pekerja', 'value' => '3.450', 'unit' => 'Orang', 'icon' => 'heroicon-o-users'],
            ['label' => 'Pendapatan', 'value' => '45.2', 'unit' => 'Miliar Rp', 'icon' => 'heroicon-o-banknotes'],
            ['label' => 'Pengeluaran', 'value' => '28.5', 'unit' => 'Miliar Rp', 'icon' => 'heroicon-o-shopping-bag'],
            ['label' => '3 KBLI Terbesar', 'value' => '10, 11, 13', 'unit' => 'Kategori', 'icon' => 'heroicon-o-chart-bar'],
        ];
    }
}
