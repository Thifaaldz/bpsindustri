@php $growthData = $this->getGrowthData(); @endphp

<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    {{-- Header --}}
    <div class="flex items-center gap-3 flex-shrink-0">
        <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
            </svg>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap">Pertumbuhan Produksi</h2>
    </div>

    {{-- 3 metric cards --}}
    <div class="flex gap-3 flex-1 min-h-0">
        @foreach($growthData as $item)
            <div class="flex-1 bg-white rounded-2xl p-3 text-center shadow-[0_4px_20px_rgba(0,0,0,0.08)] flex flex-col items-center justify-center gap-0.5">
                <div class="text-sm font-black text-[#F57C00]">{{ $item['label'] }}</div>
                <div class="text-[10px] font-semibold text-gray-500">{{ $item['subtitle'] }}</div>
                <div class="text-xl font-black text-black">{{ $item['value'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- Filters at bottom --}}
    <div class="flex items-center justify-center gap-3 flex-shrink-0">
        <div class="bg-white rounded-full px-4 py-1.5 flex items-center gap-2 shadow-sm border border-gray-100">
            <select wire:model.live="selectedQuarter"
                class="bg-transparent border-none focus:ring-0 text-xs font-black text-black cursor-pointer appearance-none pr-6 py-0">
                @foreach($availableQuarters as $q)
                    <option value="{{ $q }}">Triwulan {{ $q }}</option>
                @endforeach
            </select>
        </div>
        <div class="bg-white rounded-full px-4 py-1.5 flex items-center gap-2 shadow-sm border border-gray-100">
            <select wire:model.live="selectedYear"
                class="bg-transparent border-none focus:ring-0 text-xs font-black text-black cursor-pointer appearance-none pr-6 py-0">
                @foreach($availableYears as $year)
                    <option value="{{ $year }}">Tahun {{ $year }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
