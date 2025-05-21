<?php

namespace App\Filament\Resources\HealthResource\Pages;

use App\Filament\Resources\HealthResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHealths extends ListRecords
{
    protected static string $resource = HealthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
