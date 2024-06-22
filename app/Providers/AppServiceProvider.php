<?php

namespace App\Providers;

use App\Filament\Resources\SettingResource;
use App\Models\Setting;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Filament::serving(function () {
            Filament::registerNavigationItems([
                NavigationItem::make('Setting')
                    ->url(SettingResource::getUrl() . '/' . Setting::first()->id . '/edit')
                    ->icon('heroicon-o-cog-8-tooth')
                    ->group('Settings')->isActiveWhen(fn() => \Request::route()->getName() === "filament.dashboard.resources.settings.edit")
            ]);
        });
    }
}
