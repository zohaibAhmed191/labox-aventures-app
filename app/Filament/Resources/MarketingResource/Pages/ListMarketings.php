<?php

namespace App\Filament\Resources\MarketingResource\Pages;

use App\Filament\Resources\MarketingResource;
use App\Models\Marketing; // Make sure to import your model
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarketings extends ListRecords
{
    protected static string $resource = MarketingResource::class;

    public function mount(): void
    {
        $record = Marketing::first();
        if ($record) {
            // If a record exists, redirect to the edit page
            $this->redirect(MarketingResource::getUrl('edit', ['record' => $record]));
        } else {
            // If no record exists, redirect to the create page
            $this->redirect(MarketingResource::getUrl('create'));
        }
    }

    protected function getHeaderActions(): array
    {
        // This won't be shown since we're redirecting, but keeping it for completeness
        $recordExists = Marketing::count() > 0;
        if ($recordExists) {
            return [];
        }
        return [
            Actions\CreateAction::make(),
        ];
    }
}
