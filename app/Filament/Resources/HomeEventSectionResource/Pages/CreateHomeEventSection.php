<?php

namespace App\Filament\Resources\HomeEventSectionResource\Pages;

use App\Filament\Resources\HomeEventSectionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeEventSection extends CreateRecord
{
    protected static string $resource = HomeEventSectionResource::class;
    protected static bool $canCreateAnother = false;
    // This completely disables the "Create Another" functionality
    protected function configureCreateAnother(): void
    {
        $this->disableCreateAnother();
    }
}
