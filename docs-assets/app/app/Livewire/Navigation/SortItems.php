<?php

namespace App\Livewire\Navigation;

use Filament\Pages\Page;
use Filament\Navigation\NavigationItem;

class SortItems extends Page
{
    protected static string $view = 'livewire.navigation.sort-item';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Products')
                    ->sort(2)
                    ->icon('heroicon-o-document-text')
                    ->url(fn (): string => '#'),
                NavigationItem::make('')
                    ->label('Orders')
                    ->sort(1)
                    ->icon('heroicon-o-document-text')
                    ->url(fn (): string => '#'),
            ]);
    }
}
