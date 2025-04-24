<?php

namespace App\Filament\Resources\NosEscapeResource\Pages;

use App\Filament\Resources\NosEscapeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNosEscape extends CreateRecord
{
    protected static string $resource = NosEscapeResource::class;

    // Override getRedirectUrl() to redirect to the index page after creation
    protected function getRedirectUrl(): string
    {
        // Redirect to the index page (list of nos_escapes)
        return $this->getResource()::getUrl('index');
    }
}
