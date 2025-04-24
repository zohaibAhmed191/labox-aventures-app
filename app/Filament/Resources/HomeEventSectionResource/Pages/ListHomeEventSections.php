<?php

namespace App\Filament\Resources\HomeEventSectionResource\Pages;

use App\Filament\Resources\HomeEventSectionResource;
use App\Models\HomeEventSection; // Make sure to import your model
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeEventSections extends ListRecords
{
    protected static string $resource = HomeEventSectionResource::class;

    public function mount(): void
    {
        $record = HomeEventSection::first();

        if ($record) {
            // If a record exists, redirect to the edit page
            $this->redirect(HomeEventSectionResource::getUrl('edit', ['record' => $record]));
        } else {
            // If no record exists, redirect to the create page
            $this->redirect(HomeEventSectionResource::getUrl('create'));
        }
    }

    protected function getHeaderActions(): array
    {
        // This won't be shown since we're redirecting, but keeping it for completeness
        $recordExists = HomeEventSection::count() > 0;

        if ($recordExists) {
            return [];
        }

        return [
            Actions\CreateAction::make(),
        ];
    }
}
