<?php

namespace App\Filament\Resources\ImplementResource\Pages;

use App\Filament\Resources\ImplementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImplements extends ListRecords
{
    protected static string $resource = ImplementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
