<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Models\Customer;
use Filament\Actions\CreateAction;
use Filament\Support\Enums\IconPosition;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Customers\CustomerResource;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make('Semua'),

            'Active' => Tab::make('Aktif')
                ->icon('heroicon-m-check-circle')
                ->iconPosition(IconPosition::After)
                ->badge(Customer::where('active', true)->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('active', true)),

            'Inactive' => Tab::make('Tidak Aktif')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('active', false)),
        ];
    }
}
