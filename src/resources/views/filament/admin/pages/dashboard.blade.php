<x-filament-panels::page class="!p-0 max-w-full">
    <style>
        /* Force main content area to never scroll on dashboard */
        .fi-main { overflow: hidden !important; }
        .fi-page { padding: 0 !important; height: 100%; }
        .fi-main .fi-page > * { height: 100%; }
    </style>

    <div class="flex w-full gap-4 p-4 overflow-hidden" style="height: calc(100vh - 64px); background-color: #FFFCF0;">
        @if($activeTab === 'DSI')
            @include('filament.admin.pages.tabs.dsi')
        @elseif($activeTab === 'IBS')
            @include('filament.admin.pages.tabs.ibs')
        @elseif($activeTab === 'IMK')
            @include('filament.admin.pages.tabs.imk')
        @elseif($activeTab === 'KEK-KI')
            @include('filament.admin.pages.tabs.kek-ki')
        @endif
    </div>
</x-filament-panels::page>
