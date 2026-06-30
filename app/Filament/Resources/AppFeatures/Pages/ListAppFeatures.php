<?php

namespace App\Filament\Resources\AppFeatures\Pages;

use App\Filament\Resources\AppFeatures\AppFeatureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAppFeatures extends ListRecords
{
    protected static string $resource = AppFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
