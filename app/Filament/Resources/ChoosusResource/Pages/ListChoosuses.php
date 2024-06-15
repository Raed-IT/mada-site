<?php

namespace App\Filament\Resources\ChoosusResource\Pages;

use App\Filament\Resources\ChoosusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChoosuses extends ListRecords
{
    protected static string $resource = ChoosusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
