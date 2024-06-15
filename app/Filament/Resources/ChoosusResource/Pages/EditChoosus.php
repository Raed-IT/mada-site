<?php

namespace App\Filament\Resources\ChoosusResource\Pages;

use App\Filament\Resources\ChoosusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChoosus extends EditRecord
{
    protected static string $resource = ChoosusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
