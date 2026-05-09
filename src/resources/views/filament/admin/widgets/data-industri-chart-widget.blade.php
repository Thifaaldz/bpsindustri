@php
    $chartData = $this->getChartData();
    $uid       = 'di_' . $this->getId();
@endphp

<script id="{{ $uid }}_data" type="application/json">@json($chartData)</script>

<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    {{-- Header --}}
    <div class="flex items-center gap-3 flex-shrink-0">
        <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap">Pertumbuhan Data Industri</h2>
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
