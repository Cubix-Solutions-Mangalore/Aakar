<?php

namespace App\Filament\Resources\ShoppingResource\Pages;

use App\Filament\Resources\ShoppingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShopping extends EditRecord
{
    protected static string $resource = ShoppingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
