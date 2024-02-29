<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class OrderChart extends ChartWidget
{
    protected static ?string $heading = 'Order Chart';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = Order::query()
            ->selectRaw('count(*) as total')
            ->groupBy('order_date')
            ->get();

        $arraynya = [];
        foreach ($data as $item) {
            $arraynya[] = $item->total;
        }


        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => $arraynya,
                ],
            ],
            'labels' => DB::table('orders')->select('order_date')->distinct()->pluck('order_date'),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
