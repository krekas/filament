<?php

namespace App\Livewire\Navigation;

use Filament\Pages\Page;
use Filament\Navigation\NavigationItem;

class ChangeIcon extends Page
{
    protected static string $view = 'livewire.navigation.change-icon';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Settings')
                    ->url(fn (): string => '#')
                    ->icon('heroicon-o-cog-6-tooth'),
            ]);
    }
}
