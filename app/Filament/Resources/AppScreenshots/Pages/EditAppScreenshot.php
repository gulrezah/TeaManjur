<?php

namespace App\Filament\Resources\AppScreenshots\Pages;

use App\Filament\Resources\AppScreenshots\AppScreenshotResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAppScreenshot extends EditRecord
{
    protected static string $resource = AppScreenshotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
