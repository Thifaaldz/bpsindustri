<!-- Top Row -->
<div class="md:col-span-12 grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Map Widget -->
    <div class="bg-white rounded-[15px] shadow-sm p-6 flex flex-col gap-4">
        <h3 class="text-lg font-bold text-gray-900">Industri Besar dan Sedang di Indonesia</h3>
        <div class="h-64 bg-gray-100 rounded-lg overflow-hidden z-0 border border-gray-200">
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=95.0%2C-11.0%2C141.0%2C6.0&amp;layer=mapnik"></iframe>
        </div>
        <div class="flex gap-2 justify-center mt-2">
            <select class="rounded-full bg-white border border-gray-200 text-sm px-4 py-2 shadow-sm z-10">
                <option>Variabel</option>
            </select>
            <select class="rounded-full bg-white border border-gray-200 text-sm px-4 py-2 shadow-sm z-10">
                <option>2023</option>
            </select>
        </div>
    </div>
    
    <!-- Bar Chart -->
    @livewire(\App\Filament\Admin\Widgets\IbsBarChartWidget::class)
</div>

<!-- Bottom Row -->
<div class="md:col-span-12 grid grid-cols-1 md:grid-cols-12 gap-6">
    <!-- Formula (approx 60%) -->
    <div class="md:col-span-7">
        @livewire(\App\Filament\Admin\Widgets\IbsFormulaWidget::class)
    </div>
    
    <!-- Growth Index (approx 40%) -->
    <div class="md:col-span-5">
        @livewire(\App\Filament\Admin\Widgets\IbsLineChartWidget::class)
    </div>
</div>

