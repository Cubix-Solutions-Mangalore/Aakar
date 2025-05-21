<?php

namespace App\Filament\Resources\HealthResource\Pages;

use App\Filament\Resources\HealthResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHealth extends EditRecord
{
    protected static string $resource = HealthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
