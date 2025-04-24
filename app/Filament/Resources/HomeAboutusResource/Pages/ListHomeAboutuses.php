<?php

namespace App\Filament\Resources\HomeAboutusResource\Pages;

use App\Filament\Resources\HomeAboutusResource;
use App\Models\HomeAboutus; // Import the HomeAboutus model
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeAboutuses extends ListRecords
{
    protected static string $resource = HomeAboutusResource::class;

    // Mount method to check if a record exists
    public function mount(): void
    {
        $record = HomeAboutus::first();  // Check if there's any record

        if ($record) {
            // If a record exists, redirect to the edit page
            $this->redirect(HomeAboutusResource::getUrl('edit', ['record' => $record]));
        } else {
            // If no record exists, redirect to the create page
            $this->redirect(HomeAboutusResource::getUrl('create'));
        }
    }

    // Header actions to show the create button
    protected function getHeaderActions(): array
    {
        $recordExists = HomeAboutus::count() > 0;  // Check if any records exist

        // If a record exists, do not show the create button
        if ($recordExists) {
            return [];
        }

        // If no records exist, show the create button
        return [
            Actions\CreateAction::make(),  // "Create" action button
        ];
    }
}
