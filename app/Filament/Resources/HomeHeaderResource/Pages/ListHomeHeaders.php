<?php

namespace App\Filament\Resources\HomeHeaderResource\Pages;

use App\Filament\Resources\HomeHeaderResource;
use App\Models\HomeHeader; // Import your model
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeHeaders extends ListRecords
{
    protected static string $resource = HomeHeaderResource::class;

    // When the page is loaded
    public function mount(): void
    {
        $record = HomeHeader::first();

        if ($record) {
            // If a record exists, redirect to the edit page
            $this->redirect(HomeHeaderResource::getUrl('edit', ['record' => $record]));
        } else {
            // If no record exists, redirect to the create page
            $this->redirect(HomeHeaderResource::getUrl('create'));
        }
    }

    // Define actions in the header
    protected function getHeaderActions(): array
    {
        // Check if a record exists, and only show the "Create" action if no records exist
        $recordExists = HomeHeader::count() > 0;
        
        if ($recordExists) {
            return [];
        }

        return [
            Actions\CreateAction::make(), // Create button
        ];
    }
}
