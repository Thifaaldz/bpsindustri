@php
    $chartData = $this->getChartData();
    $uid       = 'di_' . $this->getId();
@endphp

<script id="{{ $uid }}_data" type="application/json">@json($chartData)</script>

<div class="rounded-[2rem] p-4 bg-[#FFE9A0] flex flex-col gap-3 shadow-sm h-full overflow-hidden">

    {{-- Header --}}
    <div class="flex items-center gap-2 bg-white w-max px-3 py-1.5 rounded-full shadow-sm flex-shrink-0">
        <div class="p-1 rounded-full bg-black">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <h2 class="text-xs font-bold text-gray-900 whitespace-nowrap">Pertumbuhan Data Industri</h2>
    </div>

    {{-- Card --}}
    <div class="bg-white rounded-2xl p-3 flex-1 min-h-0 flex flex-col gap-2 overflow-hidden">
        {{-- Sub-header --}}
        <div class="flex items-start justify-between gap-2 flex-shrink-0">
            <div>
                <div class="text-xs font-bold text-gray-800">Perkembangan Data Produksi</div>
                <div class="text-[10px] text-gray-400">Indeks Produksi (2023 = 100)</div>
            </div>
            <div class="flex items-center gap-1.5 flex-shrink-0">
                <span class="text-[10px] text-gray-500 font-medium">Tahun</span>
                <select wire:model.live="selectedYear"
                    class="text-[10px] rounded-full border border-gray-200 bg-white px-2 py-0.5 font-semibold focus:ring-1 focus:ring-orange-300 cursor-pointer">
                    @foreach($availableYears as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Canvas --}}
        <div class="relative flex-1 min-h-0"
            wire:key="{{ $uid }}_{{ $selectedYear }}"
            x-data="{
                chart: null,
                init() { this.$nextTick(() => this.buildChart()); },
                buildChart() {
                    if (this.chart) { this.chart.destroy(); this.chart = null; }
                    const raw = JSON.parse(document.getElementById('{{ $uid }}_data').textContent);
                    this.chart = new Chart(this.$refs.cvs, {
                        type: 'line',
                        data: { labels: raw.labels, datasets: raw.datasets.map(d => ({...d, pointRadius:2, pointHoverRadius:4})) },
                        options: {
                            responsive:true, maintainAspectRatio:false,
                            plugins:{ legend:{display:false} },
                            scales:{
                                y:{ beginAtZero:true, max:140, grid:{color:'rgba(0,0,0,0.06)'}, ticks:{font:{size:8}} },
                                x:{ grid:{display:false}, ticks:{font:{size:8}} }
                            }
                        }
                    });
                }
            }"
        ><canvas x-ref="cvs" class="w-full h-full"></canvas></div>

        {{-- Legend + footer --}}
        <div class="flex items-center justify-center gap-4 flex-wrap flex-shrink-0">
            @foreach($chartData['datasets'] as $ds)
                <div class="flex items-center gap-1">
                    <svg width="18" height="8" viewBox="0 0 18 8">
                        <line x1="0" y1="4" x2="18" y2="4" stroke="{{ $ds['borderColor'] }}" stroke-width="2"/>
                        <circle cx="9" cy="4" r="2.5" fill="{{ $ds['borderColor'] }}"/>
                    </svg>
                    <span class="text-[10px] font-medium text-gray-600">{{ $ds['label'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="text-[9px] text-gray-400 flex-shrink-0">Sumber: BPS - Datai</div>
    </div>
</div>
