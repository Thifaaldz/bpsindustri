{{-- Left column ~42% : Calendar + Line Chart --}}
<div class="flex flex-col gap-4 overflow-hidden" style="width:42%;flex-shrink:0;">
    <div style="flex:1;min-height:0;overflow:hidden;">
        @livewire(\App\Filament\Admin\Widgets\TimelineWidget::class)
    </div>
    <div style="flex:1.2;min-height:0;overflow:hidden;">
        @livewire(\App\Filament\Admin\Widgets\DataIndustriChartWidget::class)
    </div>
</div>

{{-- Right column ~58% : Progress + Pertumbuhan + Peran --}}
<div class="flex flex-col gap-4 overflow-hidden" style="flex:1;min-width:0;">
    <div style="flex:1.1;min-height:0;overflow:hidden;">
        @livewire(\App\Filament\Admin\Widgets\ProgressDataWidget::class)
    </div>
    <div style="flex:0.9;min-height:0;overflow:hidden;">
        @livewire(\App\Filament\Admin\Widgets\PertumbuhanProduksiWidget::class)
    </div>
    <div style="flex:1.2;min-height:0;overflow:hidden;">
        @livewire(\App\Filament\Admin\Widgets\PeranIndustriChartWidget::class)
    </div>
</div>
