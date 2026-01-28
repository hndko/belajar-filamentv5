<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Produk')
                    ->required(),
                TextInput::make('price')
                    ->label('Harga')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),
            ]);
    }
}
