<x-filament-widgets::widget class="fi-wi-chart shadow-sm h-full">
    <div class="bg-white rounded-[15px] p-6 shadow-sm border border-gray-50 flex flex-col gap-4 h-full">
        <h3 class="text-lg font-bold text-gray-900">Rumus Indeks Produksi</h3>
        
        <div class="flex flex-col gap-3 flex-1 overflow-y-auto">
            <!-- Formula 1 -->
            <div class="bg-[#B2DFDB] rounded-[10px] p-4 flex items-center justify-center font-serif text-sm font-bold text-teal-900">
                Rasio Komoditas (Rk) = (Nilai Produksi Komoditas t / Nilai Produksi Komoditas t-1) x 100
            </div>
            
            <!-- Formula 2 -->
            <div class="bg-[#B2DFDB] rounded-[10px] p-4 flex items-center justify-center font-serif text-sm font-bold text-teal-900">
                Rasio Perusahaan (Rp) = Σ Rk / N
            </div>
            
            <!-- Formula 3 -->
            <div class="bg-[#B2DFDB] rounded-[10px] p-4 flex items-center justify-center font-serif text-sm font-bold text-teal-900">
                Indeks Produksi (IP) = Σ (Rp x Penimbang) / Σ Penimbang
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
