<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Shipped', Order::query()->where('status', 'Shipped')->count()),
            Stat::make('Cancelled', Order::query()->where('status', 'Cancelled')->count()),
            Stat::make('Resolved', Order::query()->where('status', 'Resolved')->count()),
            Stat::make('On Hold', Order::query()->where('status', 'On Hold')->count()),
            Stat::make('Disputed', Order::query()->where('status', 'Disputed')->count()),
            Stat::make('In Process', Order::query()->where('status', 'In Process')->count()),
        ];
    }
}
