<?php

namespace App\Filament\Resources\HomeVideoSectionResource\Pages;

use App\Filament\Resources\HomeVideoSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeVideoSection extends CreateRecord
{
    protected static string $resource = HomeVideoSectionResource::class;
    protected static bool $canCreateAnother = false;
    // This completely disables the "Create Another" functionality
    protected function configureCreateAnother(): void
    {
        $this->disableCreateAnother();
    }
}
