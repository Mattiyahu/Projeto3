<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Livewire\Livewire::component('health-metrics-card', \App\Http\Livewire\HealthMetricsCard::class);
        \Livewire\Livewire::component('nutrition-tracker', \App\Http\Livewire\NutritionTracker::class);
        \Livewire\Livewire::component('quick-actions', \App\Http\Livewire\QuickActions::class);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
