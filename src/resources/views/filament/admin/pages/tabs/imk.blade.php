<!-- Top Orange Section -->
<div class="md:col-span-12 bg-[#FFB300] rounded-[20px] p-6 -mx-2 -mt-2 mb-2 relative shadow-sm">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <!-- Map Card -->
        <div class="md:col-span-7 bg-white rounded-[15px] shadow-sm p-6 flex flex-col gap-4">
            <h3 class="text-lg font-bold text-gray-900">Peta Batas Provinsi</h3>
            <div class="h-64 bg-gray-100 rounded-lg overflow-hidden z-0 border border-gray-200">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=95.0%2C-11.0%2C141.0%2C6.0&amp;layer=mapnik"></iframe>
            </div>
            <div class="flex gap-2 justify-center mt-2">
                <select class="rounded-full bg-white border border-gray-200 text-sm px-4 py-2 shadow-sm z-10">
                    <option>Jumlah Industri</option>
                </select>
                <select class="rounded-full bg-white border border-gray-200 text-sm px-4 py-2 shadow-sm z-10">
                    <option>2023</option>
                </select>
            </div>
        </div>
        
        <!-- Summary Cards -->
        <div class="md:col-span-5">
            @livewire(\App\Filament\Admin\Widgets\ImkSummaryWidget::class)
        </div>
    </div>
</div>

<!-- Bottom Section -->
<div class="md:col-span-12 grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
    <div class="md:col-span-1">
        @livewire(\App\Filament\Admin\Widgets\ImkLineChartWidget::class)
    </div>
</div>
