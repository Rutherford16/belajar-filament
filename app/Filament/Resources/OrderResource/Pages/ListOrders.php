<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'Shipped' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Shipped')),
            'Resolved' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Resolved')),
            'Cancelled' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Cancelled')),
            'On Hold' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'On Hold')),
            'Disputed' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Disputed')),
            'In Process' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'In Process')),
        ];
    }
}
