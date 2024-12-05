<?php

namespace App\Livewire\Navigation;

use Filament\Pages\Page;
use Filament\Pages\Dashboard;
use Filament\Navigation\NavigationItem;

class CustomItems extends Page
{
    protected static string $view = 'livewire.navigation.custom-items';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make('Analytics')
                    ->url('https://filament.pirsch.io', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-presentation-chart-line')
                    ->group('Reports')
                    ->sort(3),
                NavigationItem::make('dashboard')
                    ->label(fn (): string => __('filament-panels::pages/dashboard.title'))
                    ->url(fn (): string => Dashboard::getUrl())
                    ->isActiveWhen(fn () => request()->routeIs('filament.admin.pages.dashboard')),
            ]);
    }
}
