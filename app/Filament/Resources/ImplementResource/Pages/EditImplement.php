<?php

namespace App\Filament\Resources\ImplementResource\Pages;

use App\Filament\Resources\ImplementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImplement extends EditRecord
{
    protected static string $resource = ImplementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
