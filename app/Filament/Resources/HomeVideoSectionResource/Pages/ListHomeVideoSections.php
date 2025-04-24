<?php

namespace App\Filament\Resources\HomeVideoSectionResource\Pages;

use App\Filament\Resources\HomeVideoSectionResource;
use App\Models\HomeVideoSection; // Make sure to import your model
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeVideoSections extends ListRecords
{
    protected static string $resource = HomeVideoSectionResource::class;

    public function mount(): void
    {
        // Fetch the first record from the HomeVideoSection table
        $record = HomeVideoSection::first();

        if ($record) {
            // If a record exists, redirect to the edit page
            $this->redirect(HomeVideoSectionResource::getUrl('edit', ['record' => $record]));
        } else {
            // If no record exists, redirect to the create page
            $this->redirect(HomeVideoSectionResource::getUrl('create'));
        }
    }

    protected function getHeaderActions(): array
    {
        // Check if a record exists. If it does, no "create" button should be displayed.
        $recordExists = HomeVideoSection::count() > 0;

        if ($recordExists) {
            // No create action if record exists
            return [];
        }

        // If no record exists, show the create button
        return [
            Actions\CreateAction::make(),
        ];
    }
}
