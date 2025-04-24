<?php

namespace App\Filament\Resources\HomeAboutusResource\Pages;

use App\Filament\Resources\HomeAboutusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeAboutus extends CreateRecord
{
    protected static string $resource = HomeAboutusResource::class;
    protected static bool $canCreateAnother = false;
}
