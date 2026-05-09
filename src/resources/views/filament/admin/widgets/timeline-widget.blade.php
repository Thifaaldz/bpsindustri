@php
    use Carbon\Carbon;
    $now          = Carbon::now();
    $currentDay   = $now->day;
    $currentMonth = $now->month;
    $currentYear  = $now->year;

    $firstDay      = Carbon::createFromDate($currentYear, $currentMonth, 1);
    $startDow      = $firstDay->dayOfWeekIso;
    $daysInMonth   = $firstDay->daysInMonth;
    $prevMonthDays = $firstDay->copy()->subMonth()->daysInMonth;

    $weeks = []; $day = 1; $prevDay = $prevMonthDays - $startDow + 2; $nextDay = 1;
    for ($w = 0; $w < 6; $w++) {
        $row = [];
        for ($d = 1; $d <= 7; $d++) {
            $ci = $w * 7 + $d;
            if ($ci < $startDow)           $row[] = ['day' => $prevDay++, 'type' => 'prev'];
            elseif ($day <= $daysInMonth)  $row[] = ['day' => $day++,     'type' => 'current'];
            else                           $row[] = ['day' => $nextDay++,  'type' => 'next'];
        }
        $weeks[] = $row;
        if ($day > $daysInMonth && $w >= 3) break;
    }
    $monthName = $firstDay->format('M Y');
@endphp

{{-- Outer yellow card --}}
<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1rem;">

    {{-- Header pill --}}
    <div class="flex items-center gap-2 bg-white w-max px-3 py-1.5 rounded-full shadow-sm flex-shrink-0">
        <div class="p-1 rounded-full" style="background:#000;">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
        </div>
        <h2 class="text-xs font-bold text-gray-900 whitespace-nowrap">Timeline Kegiatan Statistik Industri</h2>
    </div>

    {{-- Calendar white card --}}
    <div class="bg-white flex-1 min-h-0 overflow-hidden flex flex-col" style="border-radius:1rem; padding:0.75rem;">

        {{-- Month nav --}}
        <div class="flex items-center justify-between mb-2 flex-shrink-0">
            <span class="flex items-center gap-1 font-bold text-xs" style="color:#374151;">
                {{ $monthName }}
                <svg class="w-3 h-3" style="color:#F57C00;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </span>
            <div class="flex gap-0.5">
                <button class="p-1 rounded hover:bg-gray-100" style="color:#F57C00;">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button class="p-1 rounded hover:bg-gray-100" style="color:#F57C00;">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Day headers --}}
        <div class="grid grid-cols-7 flex-shrink-0">
            @foreach(['Mon','Tue','Wed','Thu','Fri','Sat','Sun'] as $d)
                <div class="text-center font-semibold py-0.5" style="font-size:9px; color:#9CA3AF;">{{ $d }}</div>
            @endforeach
        </div>

        {{-- Days --}}
        <div class="flex-1 min-h-0 flex flex-col justify-around">
            @foreach($weeks as $week)
                <div class="grid grid-cols-7">
                    @foreach($week as $cell)
                        @php
                            $isToday    = $cell['type']==='current' && $cell['day']===$currentDay;
                            $isCurrent  = $cell['type']==='current';
                            $isSelected = $selectedDate==$cell['day'] && $isCurrent && !$isToday;
                        @endphp
                        <div class="flex items-center justify-center py-0.5">
                            <span wire:click="{{ $isCurrent ? 'setDate('.$cell['day'].')' : '' }}"
                                class="inline-flex items-center justify-center w-6 h-6 rounded-full transition-colors {{ $isCurrent ? 'cursor-pointer' : '' }}"
                                style="
                                    font-size:11px; font-weight:{{ $isToday || $isSelected ? '700' : '500' }};
                                    {{ $isToday    ? 'background:#F57C00; color:#fff;' : '' }}
                                    {{ $isSelected ? 'outline:2px solid #F57C00; background:#FFF7ED; color:#F57C00;' : '' }}
                                    {{ !$isToday && !$isSelected && $isCurrent ? 'color:#1F2937;' : '' }}
                                    {{ !$isCurrent ? 'color:#D1D5DB;' : '' }}
                                "
                            >{{ $cell['day'] }}</span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
