@php $growthData = $this->getGrowthData(); @endphp

<div class="rounded-[2rem] p-4 bg-[#FFE9A0] flex flex-col gap-3 shadow-sm h-full overflow-hidden">

    {{-- Header --}}
    <div class="flex items-center gap-2 bg-white w-max px-3 py-1.5 rounded-full shadow-sm flex-shrink-0">
        <div class="p-1 rounded-full bg-black">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
            </svg>
        </div>
        <h2 class="text-xs font-bold text-gray-900 whitespace-nowrap">Pertumbuhan Produksi</h2>
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
    <div class="flex items-center gap-2 flex-shrink-0">
        <select wire:model.live="selectedQuarter"
            class="rounded-full bg-white border-none text-[10px] px-3 py-1.5 shadow-sm font-semibold focus:ring-0 cursor-pointer">
            @foreach($availableQuarters as $q)
                <option value="{{ $q }}">Triwulan {{ $q }}</option>
            @endforeach
        </select>
        <select wire:model.live="selectedYear"
            class="rounded-full bg-white border-none text-[10px] px-3 py-1.5 shadow-sm font-semibold focus:ring-0 cursor-pointer">
            @foreach($availableYears as $year)
                <option value="{{ $year }}">Tahun {{ $year }}</option>
            @endforeach
        </select>
    </div>
</div>
