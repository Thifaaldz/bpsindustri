@php
    $totals = $this->getTotals();
    $stats  = [
        ['label' => 'Selesai Cacah', 'value' => $totals['selesai_cacah']],
        ['label' => 'Sisa Target',   'value' => $totals['sisa_target']],
        ['label' => 'Eligible',      'value' => $totals['eligible']],
        ['label' => 'Sedang Cacah',  'value' => $totals['sedang_cacah']],
        ['label' => 'Kondisi Data',  'value' => $totals['kondisi_data']],
    ];
@endphp

<div class="rounded-[2rem] p-4 bg-[#FFE9A0] flex flex-col gap-3 shadow-sm h-full overflow-hidden">

    {{-- Header centered --}}
    <div class="flex items-center justify-center gap-2 bg-white w-max px-4 py-1.5 rounded-full mx-auto shadow-sm flex-shrink-0">
        <div class="p-1 rounded-full bg-black">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <h2 class="text-xs font-bold text-gray-900 whitespace-nowrap">Progress Pemasukan Data</h2>
    </div>

    {{-- 2-col grid --}}
    <div class="grid grid-cols-2 gap-2 flex-1 min-h-0">
        @foreach($stats as $stat)
            <div class="rounded-xl bg-[#D1D5DB] px-3 py-2 flex flex-col items-center justify-center shadow-inner">
                <div class="text-[#FF6B00] font-bold text-[10px] text-center">{{ $stat['label'] }}</div>
                <div class="text-xl font-black text-black leading-tight">{{ number_format($stat['value']) }}</div>
            </div>
        @endforeach

        {{-- Tahun white card --}}
        <div class="rounded-xl bg-white px-3 py-2 flex flex-col items-center justify-center shadow-sm">
            <div class="text-[#FF6B00] font-bold text-[10px]">Tahun</div>
            <select wire:model.live="selectedYear"
                class="w-full text-center text-base font-black text-black bg-transparent border-none focus:ring-0 cursor-pointer appearance-none leading-tight">
                @foreach($availableYears as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </select>
            <svg class="w-3.5 h-3.5 text-gray-400 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </div>
</div>
