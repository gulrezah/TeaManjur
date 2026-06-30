<?php

namespace App\Filament\Resources\NewsTickers\Pages;

use App\Filament\Resources\NewsTickers\NewsTickerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewsTickers extends ListRecords
{
    protected static string $resource = NewsTickerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
