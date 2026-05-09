<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.admin.pages.dashboard';
    
    public function getHeading(): string | \Illuminate\Contracts\Support\Htmlable
    {
        return '';
    }

    public function hasHeader(): bool
    {
        return false;
    }
    
    public $activeTab = 'DSI';
    
    #[\Livewire\Attributes\On('tabChanged')]
    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function getViewData(): array
    {
        return [
            'activeTab' => $this->activeTab,
        ];
    }

    public function getColumns(): int | string | array
    {
        return 1;
    }

    public function getWidgets(): array
    {
        return [];
    }
}
