<?php

namespace App\Filament\Resources\AppFeatures\Pages;

use App\Filament\Resources\AppFeatures\AppFeatureResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAppFeature extends ViewRecord
{
    protected static string $resource = AppFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
