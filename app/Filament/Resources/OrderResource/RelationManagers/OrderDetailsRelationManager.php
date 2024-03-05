<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderDetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'orders';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('order_number')
                //     ->readOnly()
                //     ->label('Order Number'),
                Select::make('product_code')
                    ->searchable()
                    ->label('Product Code')
                    ->options(Product::all()->pluck('product_name', 'product_code')),
                Forms\Components\TextInput::make('quantity_ordered')
                    ->label('Quantity Ordered')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('price_each')
                    ->label('Price Each')
                    ->required(),
                Forms\Components\TextInput::make('order_line_number')
                    ->label('Order Line Number')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Detail Order')
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product_code'),
                Tables\Columns\TextColumn::make('quantity_ordered'),
                Tables\Columns\TextColumn::make('price_each'),
                Tables\Columns\TextColumn::make('order_line_number'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
