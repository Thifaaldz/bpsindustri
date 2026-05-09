<x-filament-widgets::widget class="fi-wi-chart shadow-sm h-full">
    <div class="h-full flex flex-col gap-3">
        @foreach($this->getSummaryData() as $item)
            <div class="bg-white rounded-[15px] p-4 shadow-sm border border-gray-50 flex items-center justify-between">
                <div>
                    <div class="text-[#F57C00] font-bold text-xs mb-1">{{ $item['label'] }}</div>
                    <div class="flex items-baseline gap-1">
                        <span class="text-2xl font-black text-gray-900">{{ $item['value'] }}</span>
                        <span class="text-xs font-semibold text-gray-500">{{ $item['unit'] }}</span>
                    </div>
                </div>
                <div class="p-2 bg-orange-50 rounded-full">
                    <x-icon name="{{ $item['icon'] }}" class="w-6 h-6 text-[#F57C00]" />
                </div>
            </div>
        @endforeach
    </div>
</x-filament-widgets::widget>
