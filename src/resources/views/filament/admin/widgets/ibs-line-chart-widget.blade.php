@php
    $uid = 'ibs_line_'.uniqid();
    $data = $this->getData();
@endphp

<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1.25rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    {{-- Header --}}
    <div class="flex items-center gap-3 flex-shrink-0">
        <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
            </svg>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap">Pertumbuhan Indeks Produksi</h2>
    </div>

    {{-- Chart card --}}
    <div class="bg-white rounded-2xl p-4 flex-1 min-h-0 relative"
        wire:key="{{ $uid }}"
        x-data="{
            chart: null,
            init() { this.$nextTick(() => this.buildChart()); },
            buildChart() {
                if (this.chart) { this.chart.destroy(); this.chart = null; }
                const raw = @js($data);
                this.chart = new Chart(this.$refs.cvs, {
                    type: 'line',
                    data: raw,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: {
                            y: { beginAtZero: true, grid: { display: true, color: '#F1F5F9' } },
                            x: { grid: { display: false } }
                        },
                        elements: {
                            line: { tension: 0.4, borderWidth: 3 },
                            point: { radius: 4, hoverRadius: 6 }
                        }
                    }
                });
            }
        }"
    >
        <canvas x-ref="cvs" class="w-full h-full"></canvas>
    </div>
</div>
