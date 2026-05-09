<div class="flex flex-col gap-6 w-full h-full overflow-y-auto pr-2 pb-8">
    {{-- Main Title --}}
    <h1 class="text-2xl font-extrabold text-gray-900 text-center uppercase tracking-tight">Kawasan Ekonomi Khusus - Kawasan Industri</h1>

    {{-- Main 2-Column Split --}}
    <div class="flex gap-6 min-h-0 h-full">
        
        {{-- Left Column: Variables + Share --}}
        <div class="flex flex-col gap-6" style="flex: 1.1; min-height: 0;">
            
            {{-- 5 Variables (Horizontal Row) --}}
            <div class="flex flex-col gap-3">
                <h2 class="text-center text-[11px] font-black text-gray-900 uppercase">5 Variabel Pembentuk IKBM</h2>
                <div class="flex justify-between gap-3 w-full px-2">
                    @php
                        $variables = [
                            ['label' => 'Pesanan (V1)', 'icon' => 'heroicon-o-shopping-cart'],
                            ['label' => 'Produksi (V2)', 'icon' => 'heroicon-o-building-office-2'],
                            ['label' => 'Tenaga Kerja (V3)', 'icon' => 'heroicon-o-users'],
                            ['label' => 'Waktu pengiriman pasok (V4)', 'icon' => 'heroicon-o-clock'],
                            ['label' => 'Persediaan bahan baku (V5)', 'icon' => 'heroicon-o-cube'],
                        ];
                    @endphp
                    @foreach($variables as $var)
                        <div class="rounded-3xl p-3 flex flex-col items-center justify-center text-center gap-2 shadow-sm border border-orange-600 flex-1 h-32"
                             style="background-color: #F57C00;">
                            <x-icon name="{{ $var['icon'] }}" class="w-10 h-10 text-white opacity-90" />
                            <div class="text-[10px] font-black text-white leading-tight uppercase">{{ $var['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Share KEK-KI --}}
            <div class="rounded-[4rem] p-12 shadow-lg border border-orange-600 flex flex-col gap-10 flex-1 relative overflow-hidden" 
                 style="background-color: #F57C00; min-height: 0;">
                <h2 class="text-4xl font-black text-white text-center uppercase tracking-tight">Share KEK-KI Terhadap Industri Pengolahan</h2>
                
                <div class="flex-1 flex flex-col items-center justify-center gap-12">
                    {{-- Row 1: Tenaga Kerja & Investasi --}}
                    <div class="grid grid-cols-2 gap-12 w-full max-w-[900px] px-6">
                        <div class="bg-white rounded-[4rem] p-10 text-center shadow-2xl flex flex-col items-center justify-center aspect-[1.1/1] border-4 border-orange-100">
                            <div class="text-gray-900 font-black text-xl mb-4 uppercase tracking-widest">Tenaga Kerja</div>
                            <div class="text-7xl font-black text-gray-900 leading-none tracking-tighter">1.000</div>
                        </div>
                        <div class="bg-white rounded-[4rem] p-10 text-center shadow-2xl flex flex-col items-center justify-center aspect-[1.1/1] border-4 border-orange-100">
                            <div class="text-gray-900 font-black text-xl mb-4 uppercase tracking-widest">Investasi</div>
                            <div class="text-7xl font-black text-gray-900 leading-none tracking-tighter">1.000</div>
                        </div>
                    </div>
                    {{-- Row 2: Output --}}
                    <div class="bg-white rounded-[4rem] p-10 text-center shadow-2xl w-[42%] flex flex-col items-center justify-center aspect-[1.1/1] border-4 border-orange-100">
                        <div class="text-gray-900 font-black text-xl mb-4 uppercase tracking-widest">Output</div>
                        <div class="text-7xl font-black text-gray-900 leading-none tracking-tighter">1.000</div>
                    </div>
                </div>

                {{-- Filters --}}
                <div class="flex items-center justify-center gap-8 mb-4">
                    <div class="bg-white rounded-[2rem] px-12 py-5 flex items-center gap-2 shadow-xl min-w-[200px] border-2 border-orange-50">
                        <select class="bg-transparent border-none focus:ring-0 text-xl font-black text-black cursor-pointer appearance-none pr-10 py-0 w-full text-center">
                            <option>Tahun</option>
                        </select>
                    </div>
                    <div class="bg-white rounded-[2rem] px-12 py-5 flex items-center gap-2 shadow-xl min-w-[200px] border-2 border-orange-50">
                        <select class="bg-transparent border-none focus:ring-0 text-xl font-black text-black cursor-pointer appearance-none pr-10 py-0 w-full text-center">
                            <option>Triwulan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Column: Rumus --}}
        <div class="rounded-[3rem] p-10 shadow-lg border border-orange-600 flex flex-col gap-8" 
             style="flex: 0.9; background-color: #F57C00; min-height: 0;">
            <h2 class="text-2xl font-black text-black text-center leading-tight uppercase tracking-tight">Rumus Indeks Kondisi Usaha</h2>
            
            <div class="flex flex-col gap-8 flex-1 overflow-y-auto pr-2">
                {{-- Step 1 --}}
                <div class="bg-white rounded-[3rem] p-10 shadow-2xl border border-gray-100 flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-3 bg-orange-500"></div>
                    <h3 class="text-gray-900 font-black text-base mb-6 uppercase tracking-widest">Step 1</h3>
                    <div class="text-center mb-8">
                        <div class="text-3xl font-black text-gray-900 tracking-tighter leading-none italic">Vi = P1i*1 + P2i *0.5 + P3i*0</div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xs text-gray-900 font-bold leading-relaxed"><strong class="text-orange-600">P1:</strong> Persentase jumlah responden yang melaporkan peningkatan.</p>
                        <p class="text-xs text-gray-900 font-bold leading-relaxed"><strong class="text-orange-600">P2:</strong> Persentase jumlah responden yang melaporkan tidak ada perubahan.</p>
                        <p class="text-xs text-gray-900 font-bold leading-relaxed"><strong class="text-orange-600">P3:</strong> Persentase jumlah responden yang melaporkan penurunan.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="bg-white rounded-[3rem] p-10 shadow-2xl border border-gray-100 flex flex-col flex-1 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-3 bg-orange-500"></div>
                    <h3 class="text-gray-900 font-black text-base mb-6 uppercase tracking-widest">Step 2</h3>
                    <div class="text-center mb-8">
                        <div class="text-xl font-black text-gray-900 tracking-tighter leading-tight italic bg-orange-50 p-6 rounded-[2rem] border border-orange-100">
                            IKBM = 0,3*V1 + 0,25*V2 + 0,20*V3 + 0.15*V4 + 0.10*V5
                        </div>
                    </div>
                    
                    <h4 class="text-sm font-black text-orange-600 mb-6 uppercase border-b-2 border-gray-50 pb-3 tracking-widest">Interpretasi Nilai IKBM</h4>
                    <div class="space-y-6 flex-1 overflow-y-auto pr-2">
                        <div class="flex flex-col gap-2">
                            <div class="text-xs font-black text-gray-900 flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-orange-600"></div>
                                1. >50:
                            </div>
                            <p class="text-[12px] text-gray-800 font-medium leading-relaxed pl-5">
                                Menunjukkan bahwa mayoritas responden mengalami peningkatan pada variabel ekonomi. Semakin tinggi nilainya, semakin kuat indikasi pertumbuhan ekonomi. <span class="font-black text-orange-600 underline">Indeks di atas 50 memberikan sinyal ekspansi usaha.</span>
                            </p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="text-xs font-black text-gray-900 flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-orange-600"></div>
                                2. <50:
                            </div>
                            <p class="text-[12px] text-gray-800 font-medium leading-relaxed pl-5">
                                Menunjukkan bahwa mayoritas responden mengalami penurunan pada variabel ekonomi. Semakin rendah nilainya, semakin kuat indikasi perlambatan atau resesi ekonomi. <span class="font-black text-orange-600 underline">Indeks di bawah 50 memberikan sinyal adanya kontraksi.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
