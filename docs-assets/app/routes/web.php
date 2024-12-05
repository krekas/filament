<?php

use App\Livewire\Navigation\SortItems;
use App\Livewire\Navigation\ActiveIcon;
use App\Livewire\ActionsDemo;
use App\Livewire\Forms\FieldsDemo;
use App\Livewire\Navigation\ChangeIcon;
use App\Livewire\Navigation\CustomItems;
use App\Livewire\Forms\GettingStartedDemo;
use App\Livewire\Navigation\TopNavigation;
use App\Livewire\Forms\LayoutDemo as FormsLayoutDemo;
use App\Livewire\Infolists\EntriesDemo;
use App\Livewire\Sidebar\SidebarCollapsibleOnDesktop;
use App\Livewire\Infolists\LayoutDemo as InfolistsLayoutDemo;
use App\Livewire\NotificationsDemo;
use App\Livewire\TablesDemo;
use App\Livewire\Topbar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/actions', ActionsDemo::class);
Route::get('/forms/fields', FieldsDemo::class);
Route::get('/forms/getting-started', GettingStartedDemo::class);
Route::get('/forms/layout', FormsLayoutDemo::class);
Route::get('/infolists/entries', EntriesDemo::class);
Route::get('/infolists/layout', InfolistsLayoutDemo::class);
Route::get('/notifications', NotificationsDemo::class);
Route::get('/tables', TablesDemo::class);
Route::get('/topbar', Topbar::class);
Route::get('/navigation/active-icon', ActiveIcon::class);
Route::get('/navigation/change-icon', ChangeIcon::class);
Route::get('/navigation/sort-items', SortItems::class);
Route::get('/navigation/custom-items', CustomItems::class);
Route::get('/navigation/top-navigation', TopNavigation::class);
Route::get('/sidebar/collapsible-on-desktop', SidebarCollapsibleOnDesktop::class);
