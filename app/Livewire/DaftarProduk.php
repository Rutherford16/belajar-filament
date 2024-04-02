<?php

namespace App\Livewire;

use App\Models\Produk;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class DaftarProduk extends Component
{
    public function render()
    {
        return view('livewire.daftar-produk')->with([
            'produk' => Produk::all(),
        ]);
    }
}
