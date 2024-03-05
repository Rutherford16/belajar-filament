<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationGroup = 'Shop';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('sales_rep_employee_number')
                    ->numeric()
                    ->readOnly(),
                Select::make('sales_rep_employee_number')
                    ->searchable()
                    ->label('Sales Representative')
                    ->options(Employee::all()->pluck('first_name', 'employee_number')),
                Forms\Components\TextInput::make('customer_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('contact_first_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('contact_last_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('state')
                    ->maxLength(50),
                Forms\Components\TextInput::make('postal_code')
                    ->maxLength(50),
                Forms\Components\TextInput::make('country')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('credit_limit')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    Stack::make([
                        Tables\Columns\TextColumn::make('customer_number')
                            ->description('Customer Number', 'above')
                            ->size(TextColumn\TextColumnSize::Large),
                        Tables\Columns\TextColumn::make('customer_name')
                            ->searchable()
                            ->description('Customer Name', 'above')
                            ->size(TextColumn\TextColumnSize::Large),
                        Tables\Columns\TextColumn::make('fullnamecustomer')
                            ->searchable()
                            ->description('Contact Name', 'above')
                            ->size(TextColumn\TextColumnSize::Large),
                    ]),
                    Tables\Columns\TextColumn::make('customerIni.fullnameemployee')
                        ->description('Sales Representative', 'above')
                        ->searchable()
                        ->size(TextColumn\TextColumnSize::Large),
                    Stack::make([
                        Tables\Columns\TextColumn::make('address')
                            ->description('Address', 'above')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('postal_code')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('city')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('state')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('country')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('phone')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                    ]),
                    Tables\Columns\TextColumn::make('credit_limit')
                        ->numeric()
                        ->description('Credit Limit', 'above')
                        ->size(TextColumn\TextColumnSize::Large),
                ])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
