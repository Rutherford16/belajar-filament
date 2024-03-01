<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationGroup = 'Company';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('office_code')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('report_to')
                    ->numeric(),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('extension')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    Stack::make([
                        Tables\Columns\TextColumn::make('fullnameemployee')
                            ->searchable()
                            ->label('Employee Name')
                            ->size(TextColumn\TextColumnSize::Large),
                        Tables\Columns\TextColumn::make('job_title')
                            ->searchable()
                            ->size(TextColumn\TextColumnSize::ExtraSmall)
                            ->color('info'),
                    ]),
                    Stack::make([
                        Tables\Columns\TextColumn::make('office.address')
                            ->size(TextColumn\TextColumnSize::ExtraSmall)
                            ->description('Address', 'above'),
                        Tables\Columns\TextColumn::make('office.city')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('office.state')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('office.postal_code')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('office.country')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                        Tables\Columns\TextColumn::make('office.phone')
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                    ]),
                    Tables\Columns\TextColumn::make('job.job_title')
                        ->description('Report To', 'above')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->color('info'),
                    Tables\Columns\TextColumn::make('extension')
                        ->description('Extension', 'above')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->color('danger'),
                    Tables\Columns\TextColumn::make('email')
                        ->description('Email', 'above')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->color('success'),
                ])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
