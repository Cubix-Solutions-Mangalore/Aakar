<?php

namespace App\Filament\Resources\ShoppingResource\Pages;

use App\Filament\Resources\ShoppingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShoppings extends ListRecords
{
    protected static string $resource = ShoppingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
