<div class="flex flex-col gap-3 h-full overflow-hidden"
     style="background-color:#FFE9A0; border-radius:2rem; padding:1.25rem; box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);">

    {{-- Header --}}
    <div class="flex items-center gap-3 flex-shrink-0">
        <div class="p-2 rounded-full flex items-center justify-center bg-black" style="width:40px; height:40px;">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
            </svg>
        </div>
        <h2 class="text-xl font-extrabold text-gray-900 whitespace-nowrap">Rumus Indeks IMK</h2>
    </div>

    {{-- Formulas --}}
    <div class="flex flex-col gap-3 flex-1 overflow-y-auto">
        <div class="bg-white rounded-2xl p-4 flex items-center justify-center text-center shadow-sm border border-gray-100 min-h-[60px]">
            <p class="text-xs font-black text-gray-900 leading-relaxed">
                Rasio Komoditas (Rk) = (Nilai Produksi Komoditas t / Nilai Produksi Komoditas t-1) x 100
            </p>
        </div>
        
        <div class="bg-white rounded-2xl p-4 flex items-center justify-center text-center shadow-sm border border-gray-100 min-h-[60px]">
            <p class="text-xs font-black text-gray-900 leading-relaxed">
                Rasio Perusahaan (Rp) = Σ Rk / N
            </p>
        </div>
        
        <div class="bg-white rounded-2xl p-4 flex items-center justify-center text-center shadow-sm border border-gray-100 min-h-[60px]">
            <p class="text-xs font-black text-gray-900 leading-relaxed">
                Indeks Produksi (IP) = Σ (Rp x Penimbang) / Σ Penimbang
            </p>
        </div>
    </div>
</div>
