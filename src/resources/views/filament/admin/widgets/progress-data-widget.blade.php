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

<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    {{-- Header --}}
    <div class="flex items-center gap-3 flex-shrink-0">
        <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap">Progress Pemasukan Data</h2>
    </div>

    {{-- Standardized Stats Grid --}}
    <div class="grid grid-cols-2 gap-2 flex-1 min-h-0">
        @foreach(array_slice($stats, 0, 4) as $stat)
            <div class="rounded-xl bg-[#D9E1E7] p-2 flex flex-col items-center justify-center shadow-sm">
                <div class="text-[#FF6B00] font-bold text-[10px] mb-0.5 leading-none text-center">{{ $stat['label'] }}</div>
                <div class="text-2xl font-black text-black leading-none">{{ number_format($stat['value']) }}</div>
            </div>
        @endforeach

        {{-- Kondisi Data Box --}}
        <div class="rounded-xl bg-[#D9E1E7] p-2 flex flex-col items-center justify-center shadow-sm">
            <div class="text-[#FF6B00] font-bold text-[10px] mb-0.5 leading-none text-center">{{ $stats[4]['label'] }}</div>
            <div class="text-2xl font-black text-black leading-none">{{ number_format($stats[4]['value']) }}</div>
        </div>

        {{-- Tahun Selector Box --}}
        <div class="rounded-xl bg-white p-2 flex flex-col items-center justify-center shadow-sm border border-gray-100 relative group">
            <div class="text-gray-500 font-bold text-[10px] mb-0.5 leading-none uppercase tracking-tighter">Pilih Tahun</div>
            <div class="relative w-full flex justify-center">
                <select wire:model.live="selectedYear"
                    class="bg-transparent border-none focus:ring-0 text-lg font-black text-black cursor-pointer appearance-none p-0 text-center w-full">
                    @foreach($availableYears as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
                <div class="absolute right-0 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>
        </div>
    </div>
</div>
