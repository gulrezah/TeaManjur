<?php

namespace App\Filament\Resources\AppFeatures\Pages;

use App\Filament\Resources\AppFeatures\AppFeatureResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAppFeature extends EditRecord
{
    protected static string $resource = AppFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
