<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class IbsFormulaWidget extends Widget
{
    protected static string $view = 'filament.admin.widgets.ibs-formula-widget';
    protected int | string | array $columnSpan = 1;
}
