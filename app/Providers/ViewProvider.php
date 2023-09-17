<?php

namespace App\Providers;

use App\View\composers\currency;
use App\View\composers\NewCurrency;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        View::composer(['livewire.currency.price','livewire.dashboard.menu.trade.show','components.dashboard.menu.trade.currency.crypto-box.show','livewire.dashboard.menu.trade.main.btc','livewire.dashboard.menu.trade.main.eth','livewire.dashboard.menu.trade.main.bnb','livewire.dashboard.menu.trade.main.xmr','livewire.dashboard.menu.trade.main.doge','livewire.dashboard.menu.trade.main.ada','livewire.dashboard.menu.trade.buy.show','livewire.dashboard.menu.trade.main.eur.btc','livewire.dashboard.menu.trade.main.eur.eth','livewire.dashboard.menu.trade.main.eur.bnb','livewire.dashboard.menu.trade.main.eur.xmr','livewire.dashboard.menu.trade.main.eur.doge','livewire.dashboard.menu.trade.main.eur.ada'],currency::class);
        View::composer('livewire.dashboard.menu.dashboard.show',NewCurrency::class);
    }
}
