<?php

namespace App\Filament\Resources\AppCategories\Pages;

use App\Filament\Resources\AppCategories\AppCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAppCategory extends ViewRecord
{
    protected static string $resource = AppCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
