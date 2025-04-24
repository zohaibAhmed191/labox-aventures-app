<?php

namespace App\Filament\Resources\HomeAboutusResource\Pages;

use App\Filament\Resources\HomeAboutusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeAboutus extends EditRecord
{
    protected static string $resource = HomeAboutusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
