@php
    $chartData = $this->getChartData();
    $labels    = $chartData['labels']   ?? ['C', 'G', 'A', 'F', 'Lainnya'];
    $colors    = $chartData['datasets'][0]['backgroundColor'] ?? ['#DC2626','#78350F','#E07B2A','#FDE047','#FB923C'];
    $uid       = 'pi_' . $this->getId();
@endphp

<script id="{{ $uid }}_data" type="application/json">@json($chartData)</script>

<div class="rounded-[2rem] p-4 bg-[#FFE9A0] flex flex-col gap-3 shadow-sm h-full overflow-hidden">

    {{-- Header --}}
    <div class="flex items-center gap-2 bg-white w-max px-3 py-1.5 rounded-full shadow-sm flex-shrink-0">
        <div class="p-1 rounded-full bg-black">
            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
        </div>
        <h2 class="text-xs font-bold text-gray-900 whitespace-nowrap">Peran Industri Pengolahan dalam Ekonomi</h2>
    </div>

    {{-- Sub-row --}}
    <div class="flex items-center justify-between gap-2 flex-shrink-0">
        <span class="text-xs font-semibold text-gray-700">Distribusi PDB ADHB</span>
        <div class="flex items-center gap-1.5">
            <span class="text-[10px] font-bold text-gray-700">Share Kategori C</span>
            <select wire:model.live="selectedYear"
                class="text-[10px] rounded-full border border-gray-200 bg-white px-2 py-0.5 font-semibold focus:ring-1 focus:ring-orange-300 cursor-pointer">
                @foreach($availableYears as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Chart card --}}
    <div class="bg-white rounded-2xl p-3 flex-1 min-h-0 flex items-center gap-4 overflow-hidden"
        wire:key="{{ $uid }}_{{ $selectedYear }}"
        x-data="{
            chart: null,
            init() { this.$nextTick(() => this.buildChart()); },
            buildChart() {
                if (this.chart) { this.chart.destroy(); this.chart = null; }
                const raw = JSON.parse(document.getElementById('{{ $uid }}_data').textContent);
                this.chart = new Chart(this.$refs.cvs, {
                    type: 'doughnut',
                    data: { labels: raw.labels, datasets: raw.datasets },
                    options: {
                        responsive: true, maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        cutout: '60%'
                    }
                });
            }
        }"
    >
        <div class="relative flex-shrink-0" style="width:130px;height:130px;">
            <canvas x-ref="cvs" class="w-full h-full"></canvas>
        </div>
        <div class="flex flex-col gap-1.5 flex-1">
            @foreach($labels as $i => $label)
                <div class="flex items-center gap-2">
                    <span class="inline-block w-2.5 h-2.5 rounded-full flex-shrink-0"
                          style="background-color:{{ $colors[$i] ?? '#ccc' }};"></span>
                    <span class="text-xs font-medium text-gray-700">{{ $label }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
