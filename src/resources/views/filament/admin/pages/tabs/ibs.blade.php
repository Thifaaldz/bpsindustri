<div class="flex flex-col gap-4 w-full h-full overflow-hidden">
    {{-- Top Row: Map and Bar Chart --}}
    <div class="flex gap-4" style="flex: 1.2; min-height: 0;">
        {{-- Map Widget --}}
        <div class="flex flex-col gap-3 h-full overflow-hidden" 
             style="flex: 1.2; background-color:#FFE9A0; border-radius:2rem; padding:1.25rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">
            
            <div class="flex items-center gap-3 flex-shrink-0">
                <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis">Industri Besar dan Sedang di Indonesia</h2>
            </div>

            <div class="bg-white rounded-2xl flex-1 min-h-0 relative shadow-sm border border-gray-100 overflow-hidden">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=95.0%2C-11.0%2C141.0%2C6.0&amp;layer=mapnik"></iframe>
            </div>

            <div class="flex items-center justify-center gap-3 flex-shrink-0">
                <div class="bg-white rounded-full px-4 py-1.5 flex items-center gap-2 shadow-sm border border-gray-100">
                    <select class="bg-transparent border-none focus:ring-0 text-xs font-black text-black cursor-pointer appearance-none pr-6 py-0">
                        <option>Variabel</option>
                    </select>
                </div>
                <div class="bg-white rounded-full px-4 py-1.5 flex items-center gap-2 shadow-sm border border-gray-100">
                    <select class="bg-transparent border-none focus:ring-0 text-xs font-black text-black cursor-pointer appearance-none pr-6 py-0">
                        <option>2023</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Bar Chart Widget --}}
        <div style="flex: 0.8; min-width: 0;">
            @livewire(\App\Filament\Admin\Widgets\IbsBarChartWidget::class)
        </div>
    </div>

    {{-- Bottom Row: Formula and Line Chart --}}
    <div class="flex gap-4" style="flex: 1; min-height: 0;">
        {{-- Formula Widget --}}
        <div style="flex: 1.1; min-width: 0;">
            @livewire(\App\Filament\Admin\Widgets\IbsFormulaWidget::class)
        </div>

        {{-- Line Chart Widget --}}
        <div style="flex: 0.9; min-width: 0;">
            @livewire(\App\Filament\Admin\Widgets\IbsLineChartWidget::class)
        </div>
    </div>
</div>

