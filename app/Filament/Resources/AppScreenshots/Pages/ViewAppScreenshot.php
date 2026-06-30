<?php

namespace App\Filament\Resources\AppScreenshots\Pages;

use App\Filament\Resources\AppScreenshots\AppScreenshotResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAppScreenshot extends ViewRecord
{
    protected static string $resource = AppScreenshotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
