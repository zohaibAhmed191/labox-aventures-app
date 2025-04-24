<?php

namespace App\Filament\Resources\NosEscapeResource\Pages;

use App\Filament\Resources\NosEscapeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNosEscape extends EditRecord
{
    protected static string $resource = NosEscapeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
