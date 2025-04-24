<?php

namespace App\Filament\Resources\HomeEventSectionResource\Pages;

use App\Filament\Resources\HomeEventSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeEventSection extends EditRecord
{
    protected static string $resource = HomeEventSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
