<div class="flex items-center h-full ml-4">
    <div class="flex items-center gap-2">
        @php
            $tabs = ['DSI', 'IBS', 'IMK', 'KEK-KI'];
        @endphp
        @foreach($tabs as $tab)
            <button 
                wire:click="setTab('{{ $tab }}')"
                class="px-5 py-2 rounded-full font-bold text-sm transition-all duration-200 shadow-sm
                    {{ $activeTab === $tab 
                        ? 'bg-white text-gray-900' 
                        : 'bg-[#FFCA28] text-gray-900 hover:bg-yellow-400' }}"
            >
                {{ $tab }}
            </button>
        @endforeach
    </div>
</div>
