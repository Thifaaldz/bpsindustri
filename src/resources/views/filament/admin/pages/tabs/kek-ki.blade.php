<!-- KEK-KI Full Container -->
<div class="md:col-span-12 bg-white rounded-[20px] p-8 shadow-sm flex flex-col gap-6">
    <!-- Title -->
    <h2 class="text-center text-2xl font-bold text-gray-900">Kawasan Ekonomi Khusus - Kawasan Industri</h2>
    
    <!-- Top Metrics Row (5 Variables) -->
    <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
        @php
            $variables = [
                ['label' => 'Pesanan', 'icon' => 'heroicon-o-shopping-cart'],
                ['label' => 'Produksi', 'icon' => 'heroicon-o-building-office-2'],
                ['label' => 'Tenaga Kerja', 'icon' => 'heroicon-o-users'],
                ['label' => 'Waktu Pengiriman Pasok', 'icon' => 'heroicon-o-clock'],
                ['label' => 'Persediaan Bahan Baku', 'icon' => 'heroicon-o-cube'],
            ];
        @endphp
        @foreach($variables as $index => $var)
            <div class="bg-[#F57C00] rounded-[15px] p-4 text-white flex flex-col items-center justify-center text-center gap-2 shadow-sm border border-orange-500">
                <x-icon name="{{ $var['icon'] }}" class="w-8 h-8 opacity-90" />
                <div class="font-bold text-sm">V{{ $index + 1 }}</div>
                <div class="text-xs font-semibold opacity-90 leading-tight">{{ $var['label'] }}</div>
            </div>
        @endforeach
    </div>

    <!-- Main Content Split -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mt-2">
        
        <!-- Left Column: Share KEK-KI -->
        <div class="md:col-span-7 bg-[#F57C00] rounded-[20px] p-6 shadow-sm flex flex-col">
            <h3 class="text-lg font-bold text-white mb-4 text-center">Share KEK-KI Terhadap Industri Pengolahan</h3>
            
            <!-- 3 Metric Cards in Triangle Layout -->
            <div class="flex-1 flex flex-col items-center justify-center gap-4">
                <div class="flex gap-4 w-full justify-center">
                    <div class="bg-white rounded-[15px] p-5 text-center shadow-sm w-40 flex flex-col items-center justify-center">
                        <div class="text-[#F57C00] font-bold text-xs mb-1">Tenaga Kerja</div>
                        <div class="text-2xl font-black text-gray-900">1000</div>
                    </div>
                    <div class="bg-white rounded-[15px] p-5 text-center shadow-sm w-40 flex flex-col items-center justify-center">
                        <div class="text-[#F57C00] font-bold text-xs mb-1">Investasi</div>
                        <div class="text-2xl font-black text-gray-900">1000</div>
                    </div>
                </div>
                <!-- Centered Bottom Card -->
                <div class="bg-white rounded-[15px] p-5 text-center shadow-sm w-40 flex flex-col items-center justify-center">
                    <div class="text-[#F57C00] font-bold text-xs mb-1">Output</div>
                    <div class="text-2xl font-black text-gray-900">1000</div>
                </div>
            </div>

            <!-- Selectors -->
            <div class="flex gap-2 justify-center mt-6">
                <select class="rounded-full bg-white border-none text-sm px-6 py-2 shadow-sm text-gray-700 font-semibold focus:ring-0 appearance-none cursor-pointer">
                    <option>Tahun 2023</option>
                </select>
                <select class="rounded-full bg-white border-none text-sm px-6 py-2 shadow-sm text-gray-700 font-semibold focus:ring-0 appearance-none cursor-pointer">
                    <option>Triwulan III</option>
                </select>
            </div>
        </div>

        <!-- Right Column: Formula & Interpretation -->
        <div class="md:col-span-5 bg-[#F57C00] rounded-[20px] p-6 shadow-sm flex flex-col gap-4">
            <!-- Step 1 -->
            <div class="bg-white rounded-[15px] p-4 shadow-sm">
                <h4 class="text-[#F57C00] font-bold text-sm mb-2">Langkah 1: Perhitungan Vi</h4>
                <div class="bg-gray-50 rounded-lg p-3 text-center font-serif text-sm text-gray-700 border border-gray-100">
                    Vi = (Jumlah Jawaban Lebih Baik) + (0.5 * Jumlah Jawaban Sama)
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-white rounded-[15px] p-4 shadow-sm flex-1">
                <h4 class="text-[#F57C00] font-bold text-sm mb-2">Langkah 2: Perhitungan IKBM</h4>
                <div class="bg-gray-50 rounded-lg p-3 text-center font-serif text-sm text-gray-700 border border-gray-100 mb-4">
                    IKBM = Σ (Vi * Bobot i)
                </div>
                
                <h5 class="text-xs font-bold text-gray-800 mb-2 border-b pb-1">Interpretasi:</h5>
                <ul class="text-xs text-gray-600 space-y-2">
                    <li class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-green-500"></span>
                        <strong>> 50 :</strong> Optimis (Ekspansi)
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                        <strong>= 50 :</strong> Stabil
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                        <strong>< 50 :</strong> Pesimis (Kontraksi)
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
