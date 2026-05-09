@php
    $chartData = $this->getChartData();
    $labels    = $chartData['labels']   ?? ['C', 'G', 'A', 'F', 'Lainnya'];
    $colors    = $chartData['datasets'][0]['backgroundColor'] ?? ['#DC2626','#78350F','#E07B2A','#FDE047','#FB923C'];
    $uid       = 'pi_' . $this->getId();
@endphp

<script id="{{ $uid }}_data" type="application/json">@json($chartData)</script>

<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    {{-- Header --}}
    <div class="flex items-center gap-3 flex-shrink-0">
        <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
            </svg>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap">Peran Industri Pengolahan dalam Ekonomi</h2>
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
    <div class="bg-white rounded-2xl p-3 flex-1 min-h-0 flex items-center justify-center gap-6 overflow-hidden"
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
                        cutout: '70%'
                    }
                });
            }
        }"
    >
        <div class="relative flex-1 h-full max-h-[150px] max-w-[150px]">
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
