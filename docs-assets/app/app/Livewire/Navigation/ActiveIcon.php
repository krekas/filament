<?php

namespace App\Livewire\Navigation;

use Filament\Pages\Page;
use Filament\Navigation\NavigationItem;

class ActiveIcon extends Page
{
    protected static string $view = 'livewire.navigation.active-icon';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Settings Inactive')
                    ->url(fn (): string => '#')
                    ->activeIcon('heroicon-o-document-text')
                    ->icon('heroicon-o-cog-6-tooth'),
                NavigationItem::make('')
                    ->label('Settings Active')
                    ->url(fn (): string => '#')
                    ->isActiveWhen(fn() => request()->path() === 'navigation/active-icon')
                    ->activeIcon('heroicon-o-document-text')
                    ->icon('heroicon-o-cog-6-tooth'),
            ]);
    }
}
