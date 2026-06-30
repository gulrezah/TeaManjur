<?php

namespace App\Filament\Resources\NewsTickers\Pages;

use App\Filament\Resources\NewsTickers\NewsTickerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNewsTicker extends EditRecord
{
    protected static string $resource = NewsTickerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
