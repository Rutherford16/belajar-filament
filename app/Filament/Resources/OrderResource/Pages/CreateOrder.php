<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateOrder extends CreateRecord
{
    // use HasWizard;

    protected static string $resource = OrderResource::class;

    // public function form(Form $form): Form
    // {
    //     $getLastOrderNumber = Order::query()->orderBy('order_number', 'desc')->limit(1)->value('order_number') + 1;

    //     return parent::form($form)
    //         ->schema([
    //             Wizard::make([
    //                 Wizard\Step::make('Order')
    //                     ->schema([
    //                         Forms\Components\TextInput::make('order_number')
    //                             ->default($getLastOrderNumber)
    //                             ->readOnly()
    //                             ->label('Order Number'),
    //                         Select::make('customer_number')
    //                             ->searchable()
    //                             ->label('Customer Name')
    //                             ->options(Customer::all()->pluck('customer_name', 'customer_number')),
    //                         Forms\Components\DatePicker::make('order_date')
    //                             ->required()
    //                             ->default(Carbon::now()->toDateTimeString()),
    //                         Forms\Components\DatePicker::make('required_date')
    //                             ->required(),
    //                         Forms\Components\DatePicker::make('shipped_date'),
    //                         Select::make('status')
    //                             ->label('Status')
    //                             ->options(Order::query()->distinct()->pluck('status')),
    //                         Forms\Components\Textarea::make('comments')
    //                             ->maxLength(65535)
    //                             ->columnSpanFull(),
    //                     ]),
    //                 Wizard\Step::make('Order Details')
    //                     ->schema([
    //                         Forms\Components\TextInput::make('order_number')
    //                             ->readOnly()
    //                             ->label('Order Number'),
    //                         Select::make('orders.product_code')
    //                             ->searchable()
    //                             ->label('Product Code')
    //                             ->options(Product::all()->pluck('product_name', 'product_code')),
    //                         Forms\Components\TextInput::make('orders.quantity_ordered')
    //                             ->label('Quantity Ordered')
    //                             ->numeric()
    //                             ->required(),
    //                         Forms\Components\TextInput::make('orders.price_each')
    //                             ->label('Price Each')
    //                             ->required(),
    //                         Forms\Components\TextInput::make('orders.order_line_number')
    //                             ->label('Order Line Number')
    //                             ->required(),
    //                     ]),
    //             ])
    //         ])
    //         ->columns(null);
    // }
}
