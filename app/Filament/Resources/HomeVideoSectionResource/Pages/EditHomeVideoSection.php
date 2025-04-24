<?php

namespace App\Filament\Resources\HomeVideoSectionResource\Pages;

use App\Filament\Resources\HomeVideoSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeVideoSection extends EditRecord
{
    protected static string $resource = HomeVideoSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
