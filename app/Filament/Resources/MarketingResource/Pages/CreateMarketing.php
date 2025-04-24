<?php

namespace App\Filament\Resources\MarketingResource\Pages;

use App\Filament\Resources\MarketingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMarketing extends CreateRecord
{
    protected static string $resource = MarketingResource::class;
    protected static bool $canCreateAnother = false;
    // This completely disables the "Create Another" functionality
    protected function configureCreateAnother(): void
    {
        $this->disableCreateAnother();
    }
}
