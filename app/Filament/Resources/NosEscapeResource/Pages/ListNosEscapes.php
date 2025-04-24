<?php

namespace App\Filament\Resources\NosEscapeResource\Pages;

use App\Filament\Resources\NosEscapeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNosEscapes extends ListRecords
{
    protected static string $resource = NosEscapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
