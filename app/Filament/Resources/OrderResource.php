<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Customer;
use App\Models\Order;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationGroup = 'Shop';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        $getLastOrderNumber = Order::query()->orderBy('order_number', 'desc')->limit(1)->value('order_number') + 1;

        return $form
            ->schema([
                Forms\Components\TextInput::make('order_number')
                    ->default($getLastOrderNumber)
                    ->readOnly()
                    ->label('Order Number'),
                Select::make('customer_number')
                    ->searchable()
                    ->label('Customer Name')
                    ->options(Customer::all()->pluck('customer_name', 'customer_number')),
                Forms\Components\DatePicker::make('order_date')
                    ->required()
                    ->default(Carbon::now()->toDateTimeString()),
                Forms\Components\DatePicker::make('required_date')
                    ->required(),
                Forms\Components\DatePicker::make('shipped_date'),
                Select::make('status')
                    ->label('Status')
                    ->options(Order::query()->distinct()->pluck('status')),
                Forms\Components\Textarea::make('comments')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order.customer_name')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('order_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('required_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shipped_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                ExportBulkAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\OrderDetailsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
