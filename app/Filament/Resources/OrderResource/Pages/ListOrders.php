<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                // Pass a string
                ExcelExport::make('table')
                    ->fromTable()
                    ->withFilename(date('Y-m-d') . ' - List all orders')
                    ->except([
                        'created_at', 'updated_at', 'deleted_at',
                    ])
                    ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
            ])
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
