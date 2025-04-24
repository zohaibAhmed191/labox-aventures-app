<?php

namespace App\Filament\Resources\HomeHeaderResource\Pages;

use App\Filament\Resources\HomeHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeHeader extends CreateRecord
{
    protected static string $resource = HomeHeaderResource::class;
    protected static bool $canCreateAnother = false;
    // This completely disables the "Create Another" functionality
    protected function configureCreateAnother(): void
    {
        $this->disableCreateAnother();
    }
}
