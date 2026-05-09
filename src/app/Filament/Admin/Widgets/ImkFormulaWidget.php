<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class ImkFormulaWidget extends Widget
{
    protected static string $view = 'filament.admin.widgets.imk-formula-widget';
    protected int | string | array $columnSpan = 1;
}
