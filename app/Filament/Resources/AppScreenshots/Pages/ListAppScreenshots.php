<?php

namespace App\Filament\Resources\AppScreenshots\Pages;

use App\Filament\Resources\AppScreenshots\AppScreenshotResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAppScreenshots extends ListRecords
{
    protected static string $resource = AppScreenshotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
